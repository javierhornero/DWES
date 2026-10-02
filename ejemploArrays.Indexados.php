<?php 

    $lista = ["rojo", "verde", "azul"];
    echo $lista[0]."<br>";
    $lista[5]="gris";
    echo $lista[5]."<br>";

    print_r($lista);

echo "<br>";
echo "<br>";




//Usar siempre para arrays , listas

    foreach ($lista as $ListaRecorrida) { 
        echo $ListaRecorrida."<br>";
    }

