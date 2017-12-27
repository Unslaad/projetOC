<?php

    require_once 'model/model.php';

     class crud extends model{


        public function ajout($titre, $texte){
            $sql = 'INSERT INTO Posts(titre, texte, date) VALUES(?,?,?)';
            $date = date(DATE_W3C);
            $this->executeSQL($sql, array($titre,$texte,$date));
        }

        public function supprimer($postId){
            $sql = 'DELETE FROM Posts WHERE id = ?';
            $this->executeSQL($sql, array($postId));
        }
    }
