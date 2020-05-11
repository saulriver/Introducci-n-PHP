<?php
#funciones sin parametros
echo "Funciones sin parametros <br>";
function saludo(){
    echo "Hola <br>";
}
saludo();

#funciones con parametros
echo "Funciones con parametros <br>";
function despedida($adios){
    echo $adios."<br>";
}
despedida("Chao lola");

#funciones con retorno
echo "Funciones con retorno <br>";
function retorno($retornar){
    return $retornar;
}
echo retorno("Esto es un retorno");

?>