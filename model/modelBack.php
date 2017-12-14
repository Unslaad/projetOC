<?php

    require_once 'model/model.php';

    class back extends model{

        public function getFlagComments(){
            $sql = 'SELECT *, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM commentPosts WHERE flag=1';
            $flagComments = $this->executeSQL($sql);
            return $flagComments;
        }

    }
