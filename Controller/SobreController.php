<?php 
    namespace Controller;
    class SobreController extends Controller
    {
        public function __construct(){
            $this->view = new \Views\mainView('sobre');
        }

        public function executar(){
            $this->view->render(array('titulo'=>'Sobre'));
        }
    }    
?>