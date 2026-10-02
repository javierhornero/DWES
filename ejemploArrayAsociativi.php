<?php

$productos = [
    [
        "codigo" => "A001",
        "nombre" => "pantalon",
        "cantidad" => 10
    ],
    [
        "codigo" => "A002",
        "nombre" => "teclado",
        "cantidad" => 5
    ],
    [
        "codigo" => "A003",
        "nombre" => "zapatos",
        "cantidad" => 8
    ]
];

//echo $productos [2]["nombre"];


foreach ($productos as $i => $producto) {
    echo "$i";
    foreach ($producto as $clave => $valor){
        echo "$clave:$valor <br>";
    }
}