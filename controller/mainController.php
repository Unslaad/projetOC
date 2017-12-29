<?php
    session_start();

    require_once 'controller/controllerIndex.php';
    require_once 'controller/controllerPost.php';
    require_once 'controller/controllerBack.php';
    require_once 'controller/controllerAuth.php';
    require_once 'view/view.php';
    require_once 'controller/controllerCrud.php';
    require_once 'controller/controllerError.php';
    require 'controller/controllerFlash.php';


    class main {

        private $controllerIndex;
        private $controllerPost;
        private $controllerBack;
        private $controllerAuth;
        private $controllerCrud;
        private $controllerError;
        private $controllerFlash;


        public function __construct(){
            $this->controllerIndex = new controllerIndex();
            $this->controllerPost = new controllerPost();
            $this->controllerBack = new controllerBack();
            $this->controllerAuth = new controllerAuth();
            $this->controllerCrud = new controllerCrud();
            $this->controllerError = new controllerError();
            $this->controllerFlash = new controllerFlash();

        }

        public function Routage(){
            try{
                if (isset($_GET['action'])){
                    switch ($_GET['action']) {

                        case 'billet':
                            $idBillet = intval($_GET['id']);
                            if ($idBillet != 0)
                            {
                                $this->controllerPost->post($idBillet);
                            }
                            else
                                throw new Exception("ID de post non valide");
                            break;

                        case 'comment':
                            $pseudo = $this->getParam($_POST, 'pseudo');
                            $comment = $this->getParam($_POST, 'comment');
                            if (strlen($comment) > 250)
                                throw new Exception("Commentaire trop long. (250 caractères max)");
                            $postId = $this->getParam($_POST, 'postId');
                            $this->controllerPost->comment($pseudo,$comment,$postId);
                            $this->controllerFlash->flash();
                            break;

                        case 'admin':
                            if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'admin')
                                $this->controllerBack->back();
                            else
                                $this->controllerAuth->vueBack();
                            break;

                        case 'ajout':
                            if ($_SESSION['nom'] == 'admin'){
                                $this->controllerCrud->vueAjout();
                                $this->controllerFlash->flash();
                            }
                            else
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            break;

                        case 'suppPost':
                            if ($_SESSION['nom'] == 'admin'){
                                $this->controllerCrud->suppPost($_GET['id']);
                                $this->controllerBack->back();
                                $this->controllerFlash->flash();

                            }
                            else {
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            }
                            break;

                        case 'modif':
                            if ($_SESSION['nom'] == 'admin')
                                $this->controllerCrud->modifPost($_GET['id']);
                            else {
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            }
                            break;

                        case 'modification':
                            if ($_SESSION['nom'] == 'admin'){
                                $titre = $this->getParam($_POST, 'titre');
                                $texte = $this->getParam($_POST, 'texte');
                                $this->controllerCrud->modif($titre, $texte, $_GET['id']);
                                $this->controllerBack->back();
                                $this->controllerFlash->flash();

                            }
                            else {
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            }
                            break;

                        case 'new';
                            $titre = $this->getParam($_POST, 'titre');
                            $texte = $this->getParam($_POST, 'texte');
                            $this->controllerCrud->ajout($titre, $texte);
                            $this->controllerBack->back();
                            $this->controllerFlash->flash();
                            break;

                        case 'auth':
                            $user = $this->getParam($_POST, 'pseudo');
                            $mdp = $this->getParam($_POST, 'mdp');
                            $hashMdp = hash('sha256' , $mdp);
                            $bool = $this->controllerAuth->checkMdp($user, $hashMdp);
                            if ($bool){
                                $_SESSION['nom'] = 'admin';
                                $this->controllerBack->back();
                                $this->controllerFlash->flash();
                            }
                            else
                                throw new Exception ("Erreur dans l'identifiant ou le mot de passe");
                            break;

                        case 'unflag':
                            if ($_SESSION['nom'] == 'admin'){
                                $idComment = $_GET['id'];
                                $this->controllerBack->unFlag($idComment);
                                $this->controllerBack->backCo();
                                $this->controllerFlash->flash();

                            }
                            else
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            break;

                        case 'flag':
                            $idComment = $_GET['id'];
                            $this->controllerPost->flagComments($idComment);
                            $this->controllerIndex->index();
                            $this->controllerFlash->flash();

                            break;

                        case 'supp':
                            if ($_SESSION['nom'] == 'admin'){
                                $idComment = $_GET['id'];
                                $this->controllerBack->supp($idComment);
                                $this->controllerBack->backCo();
                                $this->controllerFlash->flash();

                            }
                            else {
                                throw new Exception("Vous n'êtes pas autorisé à faire cette action.");
                            }
                            break;

                        case 'deco':
                            session_destroy();
                            $this->controllerIndex->index();
                            break;

                        case 'backCo':
                            if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'admin')
                                $this->controllerBack->backCo();
                            else
                                $this->controllerAuth->vueBack();
                            break;

                        default:
                            throw new Exception ("Action non définie");
                            break;

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
            $this->controllerError->errorView($msgErreur);
        }

}

?>
