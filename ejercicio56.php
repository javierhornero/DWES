<?php
function contieneUnaArroba($email_partes) {
    return count($email_partes) == 2? true:false;
}

function contieneEspacio($email) {
    for( $i = 0; $i < strlen($email);$i++){
        if ($email[$i] == " ") {
            return true;
        }
    }
    return false;
}

function tieneUnPunto($dominio) {
    $contPuntos=0;
    for( $i = 0; $i < strlen($dominio);$i++){
        if ($dominio[$i] == ".") {
            $contPuntos++;
        }
    }
    if ($contPuntos==1) {
        return true;
    }
    return false;

}





if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["email"])) {
    $email=$_GET["email"];
    $email_partes=explode("@", $_GET["email"]);
    echo "usuario:$email_partes[0]<br>dominio:$email_partes[1]";
    echo "<br>trazas:<br>";
    var_dump(contieneUnaArroba($email_partes));
    var_dump(contieneEspacio($email));
    var_dump(tieneUnPunto($email_partes[1]));
    if (contieneUnaArroba($email_partes)&&(!contieneEspacio($email))
        && tieneUnPunto($email_partes[1])){
        echo "email correcto";
    }else{
        echo "email NO es correcto";
    }
}


?>

<form method="get">
    <label>Email:</label>
    <input type="text" name="email">
    <button type="submit">Enviar</button>
</form>