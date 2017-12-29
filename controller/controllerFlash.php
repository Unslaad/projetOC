<?php

    class controllerFlash{

        public function setFlash($message){
            $_SESSION['flash'] = $message;
        }

        public function flash(){
            self::setFlash('Opération effectuée avec succès.');
            if (isset($_SESSION['flash'])){
                ?>
                    <div class="alert alert-success" id="alert">
                        <a class="close"></a>
                        <?php echo $_SESSION['flash'];?>
                    </div>
                <?php
                unset($_SESSION['flash']);

            }
        }
    }
?>
