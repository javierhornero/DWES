<?php 

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["nombre"])) {
echo "Tu nombre es " . $_GET["nombre"];}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["edad"])) {
echo "Tu edad es " . $_GET["edad"];}

?>


<form method="get">
    <label>Nombre Usuario:</label>
    <input type="text" name="nombre">
    <br>
    <label>Edad Usuario:</label>
    <input type="text" name="edad">
    <br>
    <button type="submit">Enviar</button>
</form>