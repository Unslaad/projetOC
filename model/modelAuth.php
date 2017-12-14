<?php

    require_once 'model/model.php';

    class auth extends model {

        public function getMdp($user){
            $sql = 'SELECT mdp FROM admin WHERE pseudo =?';
            $req = $this->executeSQL($sql, array($user));
            return $req;
        }
    }
