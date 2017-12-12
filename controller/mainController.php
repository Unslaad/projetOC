<?php

    require_once 'controller/controllerIndex.php';
    require_once 'controller/controllerPost.php';
    require_once 'view/view.php';

    class main {

        private $controllerIndex;
        private $controllerPost;

        public function __construct(){
            $this->controllerIndex = new controllerIndex();
            $this->controllerPost = new controllerPost();
        }

        public function Routage(){
            try{
                if (isset($_GET['action']))
                {
                    if ($_GET['action'] == 'billet')
                    {
                            $idBillet = intval($_GET['id']);
                            if ($idBillet != 0)
                            {
                                $this->controllerPost->post($idBillet);
                            }
                            else
                                throw new Exception("ID de post non valide");
                    }

                    else if ($_GET['action'] == 'comment'){
                        $pseudo = $this->getParam($_POST, 'pseudo');
                        $comment = $this->getParam($_POST, 'comment');
                        $postId = $this->getParam($_POST, 'postId');
                        $this->controllerPost->comment($pseudo,$comment,$postId);
                    }
                }
                else
                    $this->controllerIndex->index();
                }

        catch (Exception $e){
            $this->erreur($e->getMessage());
        }
    }

    private function getParam($table, $name){
        if (isset($table[$name])){
            return $table[$name];
        }
        else {
            throw new Exception("Paramètre '$name' absent");

        }
    }
    private function erreur($msgErreur){
        $view = new view("Error");
        $view->generate(array('msgErreur' => $msgErreur));
    }

}
