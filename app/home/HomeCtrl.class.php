<?php

class HomeCtrl{



    public function process(){



        $this->generateView();
    }

    public function generateView(){
        getSmarty()->display(getConf()->root_path.'/app/home/Home.html');
    }
}

?>