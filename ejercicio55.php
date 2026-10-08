<?php

$tlfn = "654987321";

if(strlen($tlfn)===9)
    $longitudValida=true;
else
    $longitudValida=false;

for ($i = 0; $i < strlen($tlfn); $i++) {
if ($tlfn[i]<"0" || $tlfn[i]>"9") {
    $contieneLetra=true;
}}