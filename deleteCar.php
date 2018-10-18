<?php
include 'connection.php';

$method = $_SERVER['REQUEST_METHOD'];
if ("DELETE" === $method) {
    $request = file_get_contents('php://input');
    $car = json_decode($request);
    $sql = "DELETE FROM `parking`.`parkedcars` WHERE (`id` = $car->id)";
    $conn->query($sql);
    echo json_encode();
}
?>