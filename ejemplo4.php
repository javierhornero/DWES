<?php

$a = 5;
$b = "5";

var_dump($a == $b);   // true , por que no lo hace fuertemente tipado y los "detecta igual"
echo "<br>";

var_dump($a === $b);  // false "es fuertemente tipado" 
echo "<br>";


var_dump($a != 8);    // true
echo "<br>";

var_dump($a !== $b);  // true
echo "<br>";


var_dump(5 <=> 8);    // -1
echo "<br>";


$nombre = null;
echo $nombre ?? "Anónimo";  // Anónimo
echo "<br>";


var_dump($a > 0 && $a < 10); // true
var_dump($a < 0 || $a == 5); // true
?>