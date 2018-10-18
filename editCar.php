<?php
include 'connection.php';

$method = $_SERVER['REQUEST_METHOD'];
if ("PUT" === $method) {
    $request = file_get_contents('php://input');
    $editcar = json_decode($request);
    $carNumber = $editcar->carNumber;
    $carColor = $editcar->carColor;
    $carModel = $editcar->carModel;
    $carTime = $editcar->carTime;

    $sql = "UPDATE `parking`.`parkedcars` 
    SET `carNumbers` = '$carNumber', 
    `carColor` = '$carColor', 
    `carTime` = '$carTime' , 
    `carModel` = '$carModel' 
    WHERE (`id` = '$editcar->id')";
    $conn->query($sql);
    echo json_encode();
}
?>