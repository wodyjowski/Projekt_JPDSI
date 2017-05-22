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
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
        }
        if (empty($password)) {
            getMessages()->addMessage(new Message('Nie podano loginu', Message::ERROR));
        }
        if (empty($passwordCheck)) {
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
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