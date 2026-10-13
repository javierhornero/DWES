<form method="get">
    <label>Introduce una fecha (dd/mm/aaaa):</label>
    <input type="text" name="fecha" placeholder="25/12/2026">
    <button type="submit">Enviar</button>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["fecha"])) {
    $fecha = $_GET["fecha"];

    
function formatearFechaLegible($fechaStr){

$partes = explode ("/", $fechaStr);

$dia = $partes[0];
$mes = $partes[1];
$anio = $partes[2];


$meses = [
  "01" => "enero", "02" => "febrero", "03" => "marzo", "04" => "abril",
        "05" => "mayo", "06" => "junio", "07" => "julio", "08" => "agosto",
        "09" => "septiembre", "10" => "octubre", "11" => "noviembre", "12" => "diciembre"
    ];


//mes correspondiente del array
    $nombreMes = $meses[$mes];

return "$dia de $nombreMes de $anio";



}

$resultado = formatearFechaLegible($fecha);
echo "<p>Fecha legible: " . $resultado . "</p>";


}
?>

