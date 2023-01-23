<?php 

    namespace Controller;
    class HomeController extends Controller{
        public function __construct(){
            $this->view = new \Views\mainView('Home');
        }

        public function executar(){
            $this->view->render(array('titulo'=>'Home'));
        }
    }


?>