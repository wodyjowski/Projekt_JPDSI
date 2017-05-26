<?php

class HomeCtrl
{

    private $posts;


    public function process()
    {

        $where = "";


        try {
            $this->posts = getDB()->select("post", [
                "title",
                "content"
            ],[
                "ORDER" => "postID DESC"
            ]);
        } catch (Exception $e) {
            echo $e;
        }


        $this->generateView();
    }


    public function createPost()
    {
        $title = getFromRequest('title',true,'Błędne wywołanie systemu');
        $content = getFromRequest('content',true,'Błędne wywołanie systemu');

        if (empty($title)) {
            getMessages()->addMessage(new Message('Nie podano loginu', Message::ERROR));
        }
        if (empty($content)) {
            getMessages()->addMessage(new Message('Nie podano hasła', Message::ERROR));
        }

        if(!getMessages()->isError()) {

            try {
                getDB()->insert("post", [
                    "userId" => getUser()["userID"],
                    "title" => $title,
                    "content" => $content
                ]);
            } catch (Exception $e) {
                echo $e;
            }
        }

        $this->process();

    }


    public
    function generateView()
    {
        getSmarty()->assign("posts", $this->posts);
        getSmarty()->assign('mainTitle', "Forum");
        getSmarty()->display(getConf()->root_path . '/app/home/Home.html');
    }
}

?>