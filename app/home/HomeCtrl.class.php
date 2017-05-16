<?php

class HomeCtrl{

    private $posts;


    public function process(){

        $where = "";

        $this->posts = getDB()->select("post", [
            "title",
            "content"
        ], $where );


        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign("posts",$this->posts);
        getSmarty()->display(getConf()->root_path.'/app/home/Home.html');
    }
}

?>