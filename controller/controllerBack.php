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
            $view = new view("Back");
            $view->generate(array('post' => $post));

        }
        public function backCo(){
            $comments = $this->back->getFlagComments();
            $view= new view("Back2");
            $view->generate(array('comments' => $comments));

        }

        public function unFlag($id){
            $this->back->unflag($id);
        }

        public function supp($id){
            $this->back->supprimer($id);
        }
    }
