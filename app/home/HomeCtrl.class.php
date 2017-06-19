<?php
require_once "PostForm.class.php";


class HomeCtrl
{


    private $form;
    private $posts;
    private $offset =  0;
    private $postCount;
    private $postPerPage = 5;


    public function __construct()
    {
        $this->form = new PostForm();
    }




    public function process()
    {


        try {
            $this->posts = getDB()->select("post",
                [
                    "[>]user" => ["userID"]
                ], [
                    "post.postID",
                    "post.title",
                    "post.content",
                    "user.username"
                ], [
                    "ORDER" => "postID DESC",
                    'LIMIT' => [$this->offset, $this->postPerPage]
                ]);
        } catch (Exception $e) {
            echo $e;
        }
        $this->countPosts();

    }


    public function processCreate()
    {
        $this->form->title = getFromRequest('title', true, 'Błędne wywołanie systemu');
        $this->form->content = getFromRequest('content', true, 'Błędne wywołanie systemu');

        if (empty($this->form->title)) {
            getMessages()->addMessage(new Message('Nie podano tytułu', Message::ERROR));
        }
        if (empty($this->form->content)) {
            getMessages()->addMessage(new Message('Brak treści', Message::ERROR));
        }


        if (!getMessages()->isError()) {

            try {
                getDB()->insert("post", [
                    "userId" => getUser()["userID"],
                    "title" => $this->form->title,
                    "content" => $this->form->content,
                ]);
            } catch (Exception $e) {
                echo $e;
            }
        }

    }

    public function countPosts()
    {
        try {
            $this->postCount = getDB()->count("post", [
            ]);
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function createPost()
    {
        $this->processCreate();
        if (!getMessages()->isError()) {
            redirectTo(home);
        } else{
            getSmarty()->assign("form", $this->form);
            $this->showPosts();
        }
    }


    public function partView()
    {
        $page = getFromPost('page',false);
        if(isset($page)) {
            $this->offset = $this->postPerPage * $page;
            }
        $this->process();
        $this->generateViewPart();
    }

    public function showPosts()
    {
        $this->process();
        $this->generateView();
    }


    public
    function generateView()
    {
        getSmarty()->assign("postCount", $this->postCount);
        getSmarty()->assign("posts", $this->posts);
        getSmarty()->assign('mainTitle', "Forum");
        getSmarty()->display(getConf()->root_path . '/app/home/Home.html');
    }

    public
    function generateViewPart()
    {
        if($this->offset  +  $this->postPerPage> $this->postCount)
        {
            header("Stop: stop");
        }
            getSmarty()->assign("postCount", $this->postCount);
            getSmarty()->assign("posts", $this->posts);
            getSmarty()->display(getConf()->root_path . '/app/home/HomePart.html');
    }
}

?>