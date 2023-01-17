<?php 

    class Application
    {
        public function executar(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home'; #Função para direcionar a URL 

            $url = ucfirst($url);
            $url.="Controller";
            if(file_exists('Controller/'.$url.'.php')){
                $className = 'Controller\\'.$url;
                $controller = new $className();
                $controller->executar();
            }else{
                die("Não existe esse controlador!");
            }
        }
    }



?>