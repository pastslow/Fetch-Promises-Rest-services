<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new car</title>
    <!-- =================== Latest compiled and minified CSS ======================= -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- =========================== jQuery library ================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--  ==================== Latest compiled JavaScript =========================== -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  ======================== Inport CSS external ============================== -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- ========================== container for new car ===============================-->
    <div class="cars-data-container text-center margin-left margin-right margin-top-80">
        <!-- ===================== container fir car number============================= -->
        <form action="" method="post">
        <div>
            <input onkeyup="checkIfNumberOfNewCarIsCorrect()" class="text-primary margin-top-20" type="text" placeholder="Car Number" name="carNumber" id="newCarNumberId" />
        </div>
        <!-- ====================== container for car image =============================-->
        <div class="margin-10 container-new-car">
            <img id='imgCarNew' class="img-responsive" src="img/black.png" alt="" />
        </div>
        <!-- ======================== container for color  ==============================-->
        <div class="d-flex content-center">
            <div onclick="changeImageOfNewCar('red')" class="bg-red opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('blue')" class="bg-blue opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('green')" class="bg-green opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('pink')" class="bg-pink opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('yellow')" class="bg-yellow opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('orange')" class="bg-orange opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('gray')" class="bg-gray opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('black')" class="bg-black opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfNewCar('white')" class="bg-white opacity-05 width-20 height-20 margin-1">
            </div>
        </div>
        <!-- ======================== container for model  ==============================-->
        <div>
            <input onkeyup="checkIfNumberOfNewCarIsCorrect()" class="text-primary margin-top-20 margin-bot-20" type="text" placeholder="Model" name="carModel" id="carNewModelId" />
            <div id="success" class="d-none">
                <input type='submit' class="btn btn-default"/>
                <span class="glyphicon glyphicon-ok text-success">
                </span>
            </div>
        </div>
        <input class="d-none opacity-0" type="text" value='black' name="carColor" id="valueOfColor"/>
        </form>
    </div>
    <!-- ========================== end of new car container ============================-->
</body>
<script src="js/changeNewCarImg.js"></script>
<script src="js/validationNewCar.js"></script>
</html>

<?php
include 'connection.php';
// insert into server dates from html
if ($_POST != null) {
    $carNumber = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["carNumber"]));
    $carModel = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["carModel"]));
    $carColor = $_POST["carColor"];
    if ($carNumber != "") {
        $sql = "INSERT INTO parkedcars (carNumbers, carModel, carColor) 
                    VALUES ('" . $carNumber . "', '" . $carModel . "', '" . $carColor . "');";

        header("location: index.php");

        $conn->query($sql);
        echo $sql;
    }
}
// insert into html dates from server
// $sql = "SELECT * FROM parking.parkedcars";
// $result = $conn->query($sql);
// while ($row = $result->fetch_assoc()) {
//     echo "<div class='text-greenyellow'>";
//     echo $row["id"] . " ";
//     echo $row["carNumbers"] . " ";
//     echo $row["carColor"] . " ";
//     echo $row["carModel"] . " ";
//     echo "</div>";
// }

?>