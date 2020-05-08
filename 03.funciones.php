<?php
#funciones sin parametros
function saludo(){
    echo "Hola <br>";
}
saludo();

#funciones con parametros
function despedida($adios){
    echo $adios."<br>";
}
despedida("Chao lola");

?>