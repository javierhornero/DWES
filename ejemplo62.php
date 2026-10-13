
<form method="get">
    <label>Dime tu edad</label>
    <input type="number" name="edad">
    <button type="submit">Enviar</button>
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["edad"])) {
;}

function comprobarEdad($edad){
    if ($edad >= 18) {
        return true;
    } else {
        return false;
    }
}

$verificacion = comprobarEdad($edad);

if ($verificacion) {
    echo "La persona es mayor de edad.";
} else {
    echo "La persona es menor de edad.";
}

?>





