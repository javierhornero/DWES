<?php
$nombre = "Paco";
$edad = 33;
$precio = 12.5;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo PHP</title>
</head>
<body>

    <h2>1. Impresión corta (&lt;?= ?&gt;)</h2>
    <p>Hola, <?= $nombre ?></p>

    <h2>2. echo</h2>
    <?php echo "Edad: ", $edad, " años"; ?>

    <h2>3. print</h2>
    <?php print "Este texto sale con print"; ?>

    <h2>4. printf</h2>
    <?php printf("El precio es %.2f €", $precio); ?>

    <h2>5. sprintf</h2>
    <?php
    $mensaje = sprintf("%s tiene %d años.", $nombre, $edad);
    echo $mensaje;
    ?>

</body>
</html>