<?php

    require_once 'controller/controllerIndex.php';
    require_once 'controller/controllerPost.php';
    require_once 'controller/controllerBack.php';
    require_once 'controller/controllerAuth.php';
    require_once 'view/view.php';

    class main {

        private $controllerIndex;
        private $controllerPost;
        private $controllerBack;
        private $controllerAuth;

        public function __construct(){
            $this->controllerIndex = new controllerIndex();
            $this->controllerPost = new controllerPost();
            $this->controllerBack = new controllerBack();
            $this->controllerAuth = new controllerAuth();
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
                    elseif ($_GET['action'] == 'admin') {
                        //require 'view/viewAuth.php';
                        $this->controllerAuth->vueBack();
                    }

                    elseif ($_GET['action'] == 'auth') {

                        $user = $this->getParam($_POST, 'pseudo');
                        $mdp = $this->getParam($_POST, 'mdp');
                        $hashMdp = hash('sha256' , $mdp);
                        $bool = $this->controllerAuth->checkMdp($user, $hashMdp);
                        if ($bool){
                            $this->controllerBack->back();
                        }
                        else
                            throw new Exception ("Erreur dans l'identifiant ou le mot de passe");

                    }
                    elseif ($_GET['action'] == 'unflag') {
                        $idComment = $_GET['id'];
                        $this->controllerBack->unFlag($idComment);
                        echo 'Modification effectuée';

                    }
                    elseif ($_GET['action'] == 'flag') {
                        $idComment = $_GET['id'];
                        $this->controllerPost->flagComments($idComment);
                        echo 'Modification effectuée';

                    }
                    elseif ($_GET['action'] == 'supp') {
                        $idComment = $_GET['id'];
                        $this->controllerBack->supp($idComment);
                        echo 'Modification effectuée';

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
