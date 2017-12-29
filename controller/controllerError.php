<?php
    require_once 'view/view.php';

    class controllerError{

        public function errorView($msgErreur){
            $view = new view("error");
            $view->generate(array('msgErreur' => $msgErreur));
        }
    }
