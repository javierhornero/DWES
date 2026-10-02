<?php

    $temperatura = [30,35,50,80,60,10,26];

    $suma = 0;
    $media = 0;

    foreach ($temperatura as $totalTemp) {
        $suma = $totalTemp + $suma;
    }

    $media = $suma / count($temperatura);

        echo "La media es ".$media;


    


