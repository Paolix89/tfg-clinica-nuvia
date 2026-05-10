<?php

require_once '../includes/db.php';

// Consulta SQL
$sql = "SELECT * FROM servicios WHERE estado = 1";

$stmt = $conexion->query($sql);

// Obtener resultados
$servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Indicar que la respuesta es JSON
header('Content-Type: application/json');

// Convertir array a JSON
echo json_encode($servicios);