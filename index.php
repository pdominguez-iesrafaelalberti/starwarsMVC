<?php



$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));
$urlParams = explode('/', $requestString);
print_r($urlParams);

switch ($_GET['action']) {
    case 'ver':

        break;
    case 'otra_Action':
       //TODO
        break;
    default:
        //Cargamos las dependencias
        require "controlador/ListadoPersonajeControlador.php";
        $controlador = new ListadoPersonajeControlador();
        $controlador->ejecuta();
    
}


?>