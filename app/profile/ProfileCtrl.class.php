<?php

class ProfileCtrl
{

    private $userData;
    private $postCount;


    public function getData(){

        try {
            $this->userData = getDB()->select("user",
                [
                    "username",
                    "email",
                ],[
                    "userID" => getUser()["userID"]
                ]);

            $this->postCount = getDB()->count("post",
                [
                    "userID" => getUser()["userID"]
                ]
            );


        } catch (Exception $e) {
            echo $e;
        }
    }



    public function showProfile()
    {
        $this->getData();
        $this->generateView();
    }


    public function editProfile(){
        $this->getData();
        $this->generateEditView();
    }

    public function generateView()
    {
        getSmarty()->assign("postCount", $this->postCount);
        getSmarty()->assign("userData", $this->userData[0]);
        getSmarty()->assign('mainTitle', "Profil");
        getSmarty()->display(getConf()->root_path . '/app/profile/Profile.html');
    }

    public function generateEditView()
    {
        getSmarty()->assign("postCount", $this->postCount);
        getSmarty()->assign("userData", $this->userData[0]);
        getSmarty()->assign('mainTitle', "Profil");
        getSmarty()->display(getConf()->root_path . '/app/profile/ProfileEdit.html');
    }

}

?>