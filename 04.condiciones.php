<?php

#Condiciones
echo "Condiciones Si, ytambien, sino <br>";
$a = 9;
$b = 10;

if($a > $b){
    echo "A es mayor que B";
}
#else if (y tambien )condicion solo si a es igual a b 
else if($a == $b){
    echo "A es igual que B";
} 

#sino se cumple ninguna de las dos vuelve a estado inicial
else{
    echo "A es menor que B";
}

echo "<br><br>";

#Suiches
echo "Switches <br>";
$dia = "sabado";

switch($dia){
    case "sabado":
    echo "Voy a estudiar php";
    break;

    case "viernes":
    echo "Voy a la fiesta ";
    break;

    case "domingo":
    echo "Voy a descansar";
    break;
    
    default: echo "Voy a la universidad"; 
}

echo "<br><br>";

#ciclo while
echo "Ciclo while <br>";
$n = 1;

while($n <= 5){
    echo $n;
    $n ++;   
}

echo "<br><br>";

#ciclo do while
echo "Ciclo do while <br>";
$p = 1;

do{
    echo $p;
    $p ++;
}
while($p <= 5);

echo "<br><br>";

#ciclo for
echo "Ciclo for <br>";
for ($i = 1; $i <= 5; $i ++){
    echo $i;
}

?>