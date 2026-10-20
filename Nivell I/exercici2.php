<?php

$nombre = "";
$apellido = "";

$errorNombre = "";
$errorApellido = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validamos nombre
    if (empty($_POST["nombre"])) {
        $errorNombre = "Se necesita introducir nombre";
    } else {
        $nombre = input_data($_POST["nombre"]);

        if (!preg_match("/^[a-zA-Záéíóúñ]*$/", $nombre)) {
            $errorNombre = "Solo puedes introducir letras";
        }
    }
    //validamos apellido
    if (empty($_POST["apellido"])) {
        $errorApellido = "Se necesita introducir apellido";
    } else {
        $apellido = input_data($_POST["apellido"]);

        if (!preg_match("/^[a-zA-Záéíóúñ]*$/", $apellido)) {
            $errorApellido = "Solo puedes introducir letras";
        }
    }


    function input_data($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
