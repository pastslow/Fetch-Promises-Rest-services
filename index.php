<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking</title>
    <!-- =================== Latest compiled and minified CSS ======================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- =========================== jQuery library ================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--  ==================== Latest compiled JavaScript ============================ -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  ======================== Inport CSS external ============================== -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="div-Park d-flex content-between">
        <h1>Parking Cars</h1>
        <a target="_blank" href="newCar.html">
            <button class="btn btn-default bg-lightgray">
                <h1><span class="glyphicon glyphicon-plus text-success"></span></h1>
            </button>
        </a>
    </div>
    <div id="carsDiv" class="central-div text-center">
    </div>
    <input onclick="insertCarsIntoHtml()" type="button" value="load"/>
</body>
<script src="js/cars.js"></script>
<script src="js/loadCars.js"></script>
</html>