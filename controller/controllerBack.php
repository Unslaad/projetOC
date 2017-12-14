<?php

    require_once 'model/modelBack.php';
    require_once 'model/modelBillet.php';

    class controllerBack{

        private $post;
        private $back;

        public function __construct(){
            $this->post = new post();
            $this->back = new back();

        }

        public function back(){
            $post = $this->post->getPosts();
            $comments = $this->back->getFlagComments();
            $view = new view("Back");
            $view->generate(array('post' => $post, 'comments' => $comments));

        }

        public function unFlag($id){
            $this->back->unflag($id);
        }
    }
