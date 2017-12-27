<?php

    require_once 'model/modelCrud.php';
    require_once 'view/view.php';

    class controllerCrud {

        private $crud;

        public function __construct(){
            $this->crud = new crud();
        }

        public function vueAjout(){
            $view= new view('Crud');
            $view->generate(array());
        }

        public function ajout($titre, $texte){
            $this->crud->ajout($titre, $texte);
        }

    }
