<?php

    require_once 'model/modelBillet.php';
    require_once 'view/view.php';

    class controllerIndex {

        private $post;

        public function __construct(){
            $this->post = new post();
        }

        public function index(){
            $post = $this->post->getPosts();
            $view = new view("Index");
            $view->generate(array('post' => $post));
        }
    }
