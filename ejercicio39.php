<?php

    $numeros = [30,35,50,80,60,10,26,9,47,1658];


    foreach ($numeros as $numerosPares) {
        if ($numerosPares %2 == 0) {
            echo $numerosPares."<br>";
        }
    }