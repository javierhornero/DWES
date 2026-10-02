<?php

    $precios = [122,500,488];
    $precioMedio = 0;
    $sumaTotal = 0;
    $precioMayor = 0;
    $precioMenor = 0;

foreach ($precios as $preciosRecorridos) {
    $sumaTotal = $preciosRecorridos + $sumaTotal;

    if ($preciosRecorridos > $precioMayor) {
        $precioMayor = $preciosRecorridos;
    }
    if ($preciosRecorridos < $precioMenor) {
        $precioMenor = $preciosRecorridos;
    }
}
    $precioMedio = $sumaTotal / count($precios);
    echo "El precio medio es: $precioMedio <br>";
    echo "El precio mayor es: $precioMayor <br>";
    echo "El precio menor es: $precioMenor <br>";

