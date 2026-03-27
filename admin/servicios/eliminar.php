<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
    exit;
}

require_once '../../includes/db.php';

if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$id = $_GET["id"];

$sql = "DELETE FROM servicios WHERE id = :id";
$stmt = $conexion->prepare($sql);
$stmt->execute(["id" => $id]);

header("Location: index.php");
exit;