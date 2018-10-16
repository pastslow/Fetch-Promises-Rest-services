<?php
include 'connection.php';


class Car
{
    public $id;
    public $carNumbers;
    public $carColor;
    public $carModel;
    public $carTime;
}

$sql = "SELECT * FROM parking.parkedcars";
$result = $conn->query($sql);

$cars = array();
while ($row = $result->fetch_assoc()) {
    $car = new Car;
    $car->id = $row["id"];
    $car->carNumbers = $row["carNumbers"];
    $car->carColor = $row["carColor"];
    $car->carModel = $row["carModel"];
    $car->carTime = "00:00:00";

    array_push($cars, $car);
}


$carsJson = json_encode($cars);
echo $carsJson;

?>