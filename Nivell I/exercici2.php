<?php

$nombre = "";
$apellido = "";
$edad = "";


$errorNombre = "";
$errorApellido = "";
$errorEdad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validamos nombre
    if (empty($_POST["nombre"])) {
        $errorNombre = "Se necesita introducir nombre";
    } else {
        $nombre = input_data($_POST["nombre"]);

        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ ]*$/", $nombre)) {
            $errorNombre = "Solo puedes introducir letras en el nombre";
        }
    }
    //validamos apellido
    if (empty($_POST["apellido"])) {
        $errorApellido = "Se necesita introducir apellido";
    } else {
        $apellido = input_data($_POST["apellido"]);

        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ ]*$/", $apellido)) {
            $errorApellido = "Solo puedes introducir letras en el apellido";
        }
    }

    //validamos edad
    if (empty($_POST["edad"])) {
        $errorEdad = "Se necesita introducir edad";
    } else {
        $edad = input_data($_POST["edad"]);
        if (!preg_match("/^[0-9]+$/", $edad)) {
            $errorEdad = "Solo puedes introducir numeros";
        }
    }

    if ($errorNombre == "" && $errorApellido == "" && $errorEdad == "") {
        echo "Te has registrado correctamente" . "<br>";
        echo "La informacion introducida es:" . "<br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Edad: " . $edad . "<br>";
    } else {
        echo "Has introducido datos erroneamente <br>";
    }
    if (!$errorNombre == "") {
        echo $errorNombre . "<br>";
    }
    if (!$errorApellido == "") {
        echo $errorApellido . "<br>";
    }
    if (!$errorEdad == "") {
        echo $errorEdad . "<br>";
    }
}


function input_data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
