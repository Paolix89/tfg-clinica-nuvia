<?php

require_once '../includes/db.php';

/* CATEGORÍA */
$categoria = $_GET["categoria"] ?? "todos";

/* CONSULTA */
$sql = "SELECT * FROM servicios WHERE estado = 1";

/* FILTROS */
if ($categoria == "estetica") {

    $sql .= " AND categoria = 'Estética'";

} elseif ($categoria == "deportiva") {

    $sql .= " AND categoria = 'Deportiva'";

} elseif ($categoria == "infiltraciones") {

    $sql .= " AND categoria = 'Infiltraciones'";

} elseif ($categoria == "bienestar") {

    $sql .= " AND categoria = 'Bienestar'";

}

/* EJECUTAR */
$stmt = $conexion->query($sql);

/* RESULTADOS */
$servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* JSON */
header('Content-Type: application/json');

echo json_encode($servicios);