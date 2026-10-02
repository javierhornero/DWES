<?php 

    $notas = [5,3,4,2,1,6];

    foreach ($notas as $cont => $notasRecorridas) {
        if ($notasRecorridas >=5){
                    echo $cont . " - " . $notasRecorridas . " - Aprobado <br>";
        }else{
                    echo $cont . " - " . $notasRecorridas . " - Suspenso <br>";           
    }
    }