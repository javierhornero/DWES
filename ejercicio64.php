
<form method="get">
    <label>Dime tu nota</label>
    <input type="number" name="nota">
    <button type="submit">Enviar</button>
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["nota"])) {
;}
$nota = $_GET["nota"];

function comprobarNota($nota){
    if ($nota >= 5) {
        return true;
    } else {
        return false;
    }
}

$verificacion = comprobarNota($nota);

if ($verificacion) {
    echo "Has aprobado.";
} else {
    echo "Has suspendido.";
}

?>
