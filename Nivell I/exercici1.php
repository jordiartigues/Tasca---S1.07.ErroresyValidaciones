<?php


$numero1 = 14;
$numero2 = 0;


try {
    $resultado = ($numero1 / $numero2);
    echo $resultado;
} catch (DivisionByZeroError $error) {
    echo "Detectado un error: no se puede dividir entre 0";
}


