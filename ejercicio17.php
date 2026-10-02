<?php 

$nota = 9;

if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota >= 7) {
    echo "Notable";
} elseif ($nota >= 5) {
    echo "Aprobado";
} elseif ($nota >= 0) {
    echo "Suspenso";
} else {
    echo "Nota no válida";
}