<?php 

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["numero1"])) {
;}
if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["numero2"])) {
;}
echo "la suma total es " . $_GET["numero1"] + $_GET["numero2"];

?>

<form method="get">
    <label>Dime un numero para sumar</label>
    <input type="number" name="numero1">
    <br>
    <label>Dime un segundo numero para sumar</label>
    <input type="number" name="numero2">
    <br>
    <button type="submit">Enviar</button>
</form>