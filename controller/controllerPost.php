<?php

    require_once 'model/model.php';
    require_once 'model/modelBillet.php';
    require_once 'model/modelComments.php';

    class controllerPost {

        private $post;
        private $comments;

        public function __construct(){
            $this->post = new post();
            $this->comments = new comments();
        }

        public function post($idbillet){
            $post = $this->post->getPost($idbillet);
            $comments = $this->comments->getComments($idbillet);
            $view = new view("post");
            $view->generate(array('post' => $post, 'comments' => $comments));

        }

        public function comment($pseudo,$comment,$postId){
            $this->comments->addComment($pseudo, $comment, $postId);
            $this->post($postId);
        }
        public function flagComments($id){
            $this->comments->flag($id);
        }
    }
