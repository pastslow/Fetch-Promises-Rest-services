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
            <button data-toggle="modal" data-target="#myModal" class="btn btn-default bg-lightgray">
                <h1><span class="glyphicon glyphicon-plus text-success"></span></h1>
            </button>
    </div>
    <div id="allCars" class="d-none">
        <div id="carsDiv" class="central-div text-center">
        </div>
    </div>
    <div id="loading" class="loading">
        <span>Loading</span>
        <span class="spanPoint">.</span>
        <span class="spanPoint2">.</span>
        <span class="spanPoint3">.</span>
    </div>
    <!-- <input onclick="insertCarsIntoHtml()" type="button" value="load"/> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Create new car</h3>
        </div>
        <div class="modal-body gainsboro">
            <?php
                include 'newCar.php';
            ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
<script src="js/cars.js"></script>
<script src="js/loadCars.js"></script>
</html>

<?php

include 'connection.php';
?>

