<?php

    $host = "localhost";
    $db = "clinica";
    $user = "root";
    $pass = "";

    try {
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
    die("Error de conexión");
    }
?>