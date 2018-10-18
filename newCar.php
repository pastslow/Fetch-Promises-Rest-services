<?php
include 'connection.php';

// == Procesing string catched from FrontEnd and convert it to useful data ==//
$method = $_SERVER['REQUEST_METHOD'];
if ("POST" === $method) {    
    $request = file_get_contents('php://input');
    $newcar = json_decode($request);
    $carModel = htmlspecialchars($newcar->carModel);
// ============= Prepare which data will be inserted into server ===========//
    $sql = "INSERT INTO `parking`.`parkedcars` (`carNumbers`,`carColor`,`carTime`,`carModel`)
            VALUES('$newcar->carNumber', '$newcar->carColor', '00:00:00', '$carModel')";
// =================== Inserting into server prepared data =================//
    $conn->query($sql);
    echo json_encode();
// redirect
header("location: index.php");
}
?>