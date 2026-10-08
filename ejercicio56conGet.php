<?php


$palabras = explode(" ", $texto);

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["email"])) {

$email=explode("@", $_GET["email"]);
    echo "usuario:$email[0]<br>dominio:$email[1]";

   
}
?>


<form method="get">
    <label>Email:</label>
    <input type="text" name="email">
    <br>
    <label>Dominio:</label>
    <input type="text" name="dominio">
    <br>
    <button type="submit">Enviar</button>
</form>


