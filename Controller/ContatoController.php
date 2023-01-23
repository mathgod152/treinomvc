<?php 
    namespace Controller;
    class ContatoController extends Controller
    {
        public function __construct(){
            $this->view = new \Views\mainView('contato');
        }

        public function executar(){
            if(isset($_POST['acao'])){
                \Models\ContatoModel::enviarFormulario();
                echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
                die();
            }

            \Router::rota('contato/sucesso',function(){
                $this->view = new \Views\MainView('contato-sucesso');
                $this->view->render(array('titulo'=>'Pagina Contato'));
            });

            \Router::rota('contato',function(){
                $this->view = new \Views\MainView('contato');
                $this->view->render(array('titulo'=>'Pagina Contato'));
            });
        }
    }    
?>