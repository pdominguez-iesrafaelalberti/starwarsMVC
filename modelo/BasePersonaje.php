<?php
    require "AbstractBase.php";
    require "Personaje.php";
    require('./utiles/Rest.php');
    require('./utiles/StarWarsAPI.php');

    class BasePersonaje extends AbstractBase{


        public function obtenerTodos(){
            $personajes = [];
            $rest = Rest::callAPI('GET', StarWarsAPI::recursoPersonas(),"");
            $total = $rest['count'];

            /*
            //Obtener siguiente página
            $next = $rest['next'];
            //Obtener pagina anterior
            $previus = $rest['previous'];*/

            $valores =  $rest['results'];

            foreach($valores as $key => $value){
                $personaje = new Personaje($key);
                $personaje->setNombre($value['name']);
                array_push (  $personajes ,$personaje);
            }

             return $personajes;
        }
        public function obtener($id){
            $rest = Rest::callAPI('GET', StarWarsAPI::recursoPersonas().$id,"");
        }

    }
?>