<?php

    require_once 'model/modelAuth.php';

    class controllerAuth{

        private $auth;

        public function __construct(){
            $this->auth = new auth();
        }

        public function checkMdp($user,$hashMdp){
            $mdpDB = $this->auth->getMdp($user);
            if ($mdpDB == $hashMdp){
                return 1;
            }
            else{
                return 0;
            }
        }
    }
