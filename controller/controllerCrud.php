<?php

    require_once 'model/modelCrud.php';
    require_once 'model/modelBillet.php';
    require_once 'view/view.php';

    class controllerCrud {

        private $crud;
        private $post;

        public function __construct(){
            $this->crud = new crud();
            $this->post = new post();
        }

        public function vueAjout(){
            $view= new view('Crud');
            $view->generate(array());
        }

        public function ajout($titre, $texte){
            $this->crud->ajout($titre, $texte);
        }

        public function suppPost($postId){
            $this->crud->supprimer($postId);
        }

        public function modifPost($postId){
            $post = $this->post->getPost($postId);
            $view= new view('Modif');
            $view->generate(array('post' => $post));
        }

        public function modif($titre, $texte, $postId){
            $this->crud->modifier($titre, $texte, $postId);
        }

    }
