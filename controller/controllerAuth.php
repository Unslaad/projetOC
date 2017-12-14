<?php

    require_once 'model/modelAuth.php';

    class controllerAuth{

        private $auth;

        public function __construct(){
            $this->auth = new auth();
        }

        public function checkMdp($user,$hashMdp){
            $mdpDB = $this->auth->getMdp($user);

            foreach ($mdpDB as $mdp){
                 $mdpdb = $mdp['mdp'];
            }

            if ($mdpdb == $hashMdp)
                return true;
            else
                return false;
        }

        public function vueBack(){
            $view= new view('Auth');
            $view->generate(array());
        }
    }
