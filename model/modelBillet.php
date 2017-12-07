<?php
    require_once 'model/model.php';

    class post extends model{

        public function getPosts(){
            $sql = 'SELECT id, titre, texte, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM Posts ORDER BY date';
            $posts = $this->executeSQL($sql);
            return $posts;
        }

        public function getPost($id_post){
            $sql = 'SELECT *, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM Posts WHERE id = ?';
            $post = $this->executeSQL($sql, array($id_post));
            if (isset($post)){
                return $post;
            }
            else{
                throw new Exception("Aucun billet pour l'id : '$id_post'");
            }
        }
    }
