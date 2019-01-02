<?php 
require_once 'Controller/Errores.php';
class App{
    function __construct(){
        echo "<p>Nueva app</p>";
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //var_dump($url);
        $archivoController = 'Controller/' . $url[0] . '.php';

        if (empty($url[0])) {
            $archivoController = 'Controller/Main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->LoadModel('main');
            return false;
        }

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            $controller->LoadModel($url[0]);
            
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                    

                }else{
                    $controller = new Errores();
                }
                
            }
        }else{
            $controller = new Errores();
        }
    }
}





?>




