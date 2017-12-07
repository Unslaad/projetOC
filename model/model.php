<?php

    abstract class model {

        private $bdd;

        protected function executeSQL($sql, $params = null){
            if ($params == null){
                $req = $this->dbConnect()->query($sql);
            }
            else{
                $req = $this->dbConnect()->prepare($sql);
                $req->execute($params);
            }
            return $req;
        }

        private function dbConnect(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
                return $db;
            }
            catch(Exception $e){
                die('Error : ' .$e->getMessage());
            }
        }
    }
