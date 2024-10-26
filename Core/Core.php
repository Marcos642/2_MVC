<?php
class Core{ 
    public function __construct(){
        $this->run();
    }

    public function run(){ // Aqui vai ser nossa URL
        $parametros = array();
        if(isset($_GET['pag'])){ //'pag' por causa do arquivo .htaccess
            $url = $_GET['pag'];
        }

        // Possui informação após domínio: www.sitex.com/classe/funcao/parametro
        if(!empty($url)){ 
            $url = explode('/',$url); // URL vira array
            $controller = $url[0].'Controller';     // homeController (guardando a classe)
            array_shift($url); // Muda a posição no array 
            
            // Se o usuário mandou função
            if(isset($url[0]) && !empty($url[0])){
                $metodo = $url[0];
                array_shift($url);
            }else{ // Se o usuário mandou somente a classe
                $metodo = 'index';
            }

            // verificar se tem parâmetro na url
            if(count($url) > 0){
                $parametros = $url;
            }
        }else{// Não possui informação após domínio: www.sitex.com/
            $controller = "homeController";  
            $metodo = "index";
        }

        // passar caminho e verificar se arquivo não existe
        // para caso de passar url invalida
        $caminho = 'apagarDepois/Controllers/'.$controller.'.php';
        if(!file_exists($caminho) && !method_exists($controller,$metodo)){
            $controller = "erroController";  
            $metodo = "index";
        }

        $c = new $controller;
        call_user_func_array(array($c,$metodo), $parametros);
    }
}