<?php
require_once "LoginForm.class.php";

class LoginCtrl
{
    private $form;
    private $result;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function validate()
    {
        $this->form->login = getFromRequest('login', true, 'Błędne wywołanie systemu');
        $this->form->pass = getFromRequest('pass', true, 'Błędne wywołanie systemu');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (getMessages()->isError()) return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            getMessages()->addMessage(new Message('Nie podano loginu', Message::ERROR));
        }
        if (empty($this->form->pass)) {
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (getMessages()->isError()) return false;


        try {
            $this->result = getDB()->select("user", [
                "userID",
                "username",
                "password",
                "image"
            ], [
                "username" => $this->form->login,

            ]);
        } catch (Exception $e) {
            echo $e;
        }


        if ($this->result != null && password_verify($this->form->pass, $this->result[0]["password"])) {
            if($this->result[0]["image"]== null){
                $this->result[0]["image"]="default.png";
            }
            setUser($this->result[0]["username"], $this->result[0]["userID"], $this->result[0]["image"]);
        } else {
            getMessages()->addMessage(new Message('Niepoprawny login lub hasło', Message::ERROR));
        }


        return !getMessages()->isError();
    }

    public function doLogin()
    {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            //getMessages()->addMessage(new Message('Poprawnie zalogowano do systemu', Message::INFO));
            storeMessages();
            redirectTo("home");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function doLogout()
    {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną (z przekazaniem messages przez sesję)
        session_start(); //rozpocznij nową sesję w celu przekazania messages w sesji
       //getMessages()->addMessage(new Message('Poprawnie wylogowano z systemu', Message::INFO));
        storeMessages();
        deleteUser();
        redirectTo('personList');
    }

    public function generateView()
    {
        getSmarty()->assign('form', $this->form); // dane formularza do widoku
        getSmarty()->assign('mainTitle', "Logowanie");
        getSmarty()->display(getConf()->root_path . '/app/login/Login.html');
    }
}