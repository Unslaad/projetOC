<?php
    require_once 'model/model.php';

    class comments extends model{

        public function getComments($id_post){
            $sql = 'SELECT *, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM commentPosts WHERE id_post = ?';
            $comments = $this->executeSQL($sql, array($id_post));
            return $comments;
        }

        public function addComment($pseudo, $comment, $postId){
            $sql = 'INSERT INTO commentPosts(id_post,pseudo,date,commentaire) VALUES(?,?,?,?)';
            $date = date(DATE_W3C);
            $this->executeSQL($sql, array($postId,$pseudo, $date, $comment));
        }
    }
