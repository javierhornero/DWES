<?php

    $nombres = ["Ana", "Pablo", "Rodrigo", "Yassin", "Beatriz", "Javier"];

    $nombreBuscado = "Yassin";

    $encontrado = false;
    $posicion = -1;

    foreach ($nombres as $cont => $nombresRecorridos) {
        if ($nombresRecorridos == $nombreBuscado) {
            $encontrado = true;
            $posicion = $cont;
            echo $cont . " - " . $nombresRecorridos . "<br>";
            break;
        }
    }

    if (!$encontrado) {
        echo "El nombre no existe en la lista.";
    } else {
        echo "El nombre se encuentra en la posición: $posicion";
    }
