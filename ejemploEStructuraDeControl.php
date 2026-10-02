<?php
//ejemplo numero pos o neg
$num=5;


if ($num>=0){
    echo"numero positivo";
}else{
    echo"numero negativo";
}


//ejemeplo un num es 1,2,3 u otro num distinto
echo "<br>";
echo "<br>";


if($num==1){
    echo"Numero es 1";
}elseif($num== 2){
    echo"numero es 2";
}elseif($num == 2){
    echo"numero es 3";
}else{
    echo"no es ninguno";
}

//Mismoejemplocono un swqitch

echo "<br>";
echo "<br>";


switch ($num) {
    case 1:
        echo "es 1";
        break;
    case 2:
        echo "es 2";
        break;
    case 3:
        echo "es 3";
        break;
    default:
        echo"el numero no es 1 ni 2 ni 3";
}



//bucles for
echo "<br>";
echo "<br>";


for($i=0;$i<5;$i++){
    echo"$i<br>";
}

// bucle while
echo "<br>";
echo "<br>";
$i=0;
while($i<5){
    echo"$i<br>";
    $i++;
}
//buclw do while

$i=0;
do{
    echo"$i<br>";
    $i++;
}while($i<5);

echo "<br>";
echo "<br>";

