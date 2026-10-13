<?php

/*Ejercicio 43. Busca un nombre dentro de un array y muestra su posición o un mensaje indicando que no existe.*/
$nombres=["paco","marta","maria","pepe"];
$nombreBuscado="marta";
$encontrado=false;
echo "Forma 1<br>";
foreach ($nombres as $i=>$nombre) {
    if ($nombreBuscado===$nombre){
        echo $i."-".$nombreBuscado;
        $encontrado=true;
    }   
}

if (!$encontrado){
    echo "No encontrado";
}

echo "<br>Forma 2<br>";
$i=array_search($nombreBuscado, $nombres);
if ($i===false) 
    echo "Elemento no encontrado";

else
    echo "Posición:$i-$nombreBuscado";
