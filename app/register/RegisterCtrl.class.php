<?php

class RegisterCtrl
{


    public function doRegister()
    {
        $username = getFromRequest('username',true,'Błędne wywołanie systemu');
        $email = getFromRequest('email',true,'Błędne wywołanie systemu');
        $password = getFromRequest('password',true,'Błędne wywołanie systemu');
        $passwordCheck = getFromRequest('passwordCheck',true,'Błędne wywołanie systemu');

        if (empty($username)) {
            getMessages()->addMessage(new Message('Nie podano loginu', Message::ERROR));
        }
        if (empty($email)) {
            getMessages()->addMessage(new Message('Nie podano adresu email', Message::ERROR));
        }
        if (empty($password)) {
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
        }
        if (empty($passwordCheck)) {
            getMessages()->addMessage(new Message('Nie podano ponownie hasła', Message::ERROR));
        }




        if (!preg_match("/^[\w]{5,}$/D",$username)) {
            getMessages()->addMessage(new Message('Niepoprawny login', Message::ERROR));
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            getMessages()->addMessage(new Message('Niepoprawny email', Message::ERROR));
        }

        if ($password!=$passwordCheck) {
            getMessages()->addMessage(new Message('Podane hasła nie są takie same', Message::ERROR));
        }


        if(!getMessages()->isError()) {

            try {
                getDB()->insert("user", [
                    "username" => $username,
                    "password" => password_hash($password, PASSWORD_DEFAULT),
                    "email" => $email
                ]);
            } catch (Exception $e) {
                echo $e;
            }


            redirectTo("home");
        }



        $this->generateView();

    }


    public
    function generateView()
    {
        getSmarty()->assign('mainTitle', "Rejestracja");
        getSmarty()->display(getConf()->root_path . '/app/register/Register.html');
    }
}

?>