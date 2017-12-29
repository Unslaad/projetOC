<?php

    class view{

        private $file;
        private $title;

        public function __construct($action){

            $this->file = "view/view" . $action . ".php";
        }

        public function generate($data){
            $content = $this->generateFile($this->file, $data);
            $view = $this->generateFile('view/gabarit.php', array('titre' => $this->title, 'contenu' => $content));
            echo $view;
        }

        private function generateFile($file, $data){
            if (file_exists($file)){
                extract($data);
                ob_start();
                require ($file);
                return ob_get_clean();
            }
            else{
                throw new Exception("Fichier '$file' introuvable");

            }
        }
    }
    
