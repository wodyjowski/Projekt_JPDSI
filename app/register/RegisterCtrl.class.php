<?php
require_once "RegisterForm.class.php";

class RegisterCtrl
{
    private $form;

    public function __construct()
    {
        $this->form = new RegisterForm();
    }



    public function doRegister()
    {
        $this->form->username = getFromRequest('username',true,'Błędne wywołanie systemu');
        $this->form->email = getFromRequest('email',true,'Błędne wywołanie systemu');
        $this->form->password = getFromRequest('password',true,'Błędne wywołanie systemu');
        $this->form->passwordCheck = getFromRequest('passwordCheck',true,'Błędne wywołanie systemu');

        if (empty($this->form->username)) {
            getMessages()->addMessage(new Message('Nie podano loginu', Message::ERROR));
        }
        if (empty($this->form->email)) {
            getMessages()->addMessage(new Message('Nie podano adresu email', Message::ERROR));
        }
        if (empty($this->form->password)) {
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
        }
        if (empty($this->form->passwordCheck)) {
            getMessages()->addMessage(new Message('Nie podano ponownie hasła', Message::ERROR));
        }


        if(!getMessages()->isError()) {

            if (!preg_match("/^[\w]{3,}$/D", $this->form->username)) {
                getMessages()->addMessage(new Message('Niepoprawna nazwa użytkownika - wymagane conajmniej 5 znaków. Dozwolone litery, cyfry oraz znaki podkreślenia.', Message::ERROR));
            }

            if (!filter_var($this->form->email, FILTER_VALIDATE_EMAIL)) {
                getMessages()->addMessage(new Message('Niepoprawny email', Message::ERROR));
            }

            if ($this->form->password != $this->form->passwordCheck) {
                getMessages()->addMessage(new Message('Podane hasła nie są takie same', Message::ERROR));
            }

            $existUsername = getDB()->count("user",
                [
                    "username" => $this->form->username
                ]
            );

            $existPassword = getDB()->count("user",
                [
                    "email" => $this->form->email
                ]
            );


            if($existUsername!=0){
                getMessages()->addMessage(new Message('Użytkownik o takiej nazwie już istnieje!', Message::ERROR));
            }

            if($existPassword!=0){
                getMessages()->addMessage(new Message('Na podany email zostało już zarejestrowane konto!', Message::ERROR));
            }



            if (!getMessages()->isError()) {

                try {
                    getDB()->insert("user", [
                        "username" => $this->form->username,
                        "password" => password_hash($this->form->password, PASSWORD_DEFAULT),
                        "email" => $this->form->email,
                        "image" => "default.png"
                    ]);
                } catch (Exception $e) {
                    echo $e;
                }


                redirectTo("home");
            }
        }


        $this->generateView();

    }


    public
    function generateView()
    {
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('mainTitle', "Rejestracja");
        getSmarty()->display(getConf()->root_path . '/app/register/Register.html');
    }
}

?>