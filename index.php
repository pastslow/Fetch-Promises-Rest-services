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

  <!-- ======================= Modal insert new car ========================-->
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
            include 'newCarPopup.php';
            ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- ====================== Modal delete car ===========================-->
    <div class="modal fade" id="deleteModal" role="dialog">
    <div class="modal-dialog">
    
      <!--======================= Modal content ============================-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Do you really want to delete this car?</h3>
        </div>
        <div class="modal-body margin-left margin-right text-center cars-data-container">
            <div>
            <h3 class='text-greenyellow' id = 'delCarNumber'>Delete Car Number</h3>
            </div>
            <div class='d-flex content-center car-image-container'>
            <img id='delCarImg' class='img-responsive' src='img/black.png' />
            </div>
            <div class='d-flex content-around'>
            <div>
            <h3 id = 'delCarTime'>00:00:00</h3>
            </div>
            <div>
            <h3 id = 'delCarId'>22</h3>
            </div>
            <div>
            <h3 id = 'delCarModel'> Dacia</h3>
            </div>
            </div>
            <div class="d-flex content-around">
                    <input type="submit" value="Yes" data-dismiss="modal" onclick="deleteSelectedCar(divId)" id='btnAnswerYes' class="btn btn-default">
                    <input class="d-none opacity-0" type="text" value='' name="deleteCar" id="idValue"/>
                <button data-dismiss="modal" class="btn btn-default">No</button>
            </div>
        </div>
        <div class="modal-footer">
            <h3 class="text-center">Deleting item will be lost forever !</h3>
        </div>
      </div>
      
    </div>
  </div>

    <!-- ======================== Modal Edit Car ===========================-->
    <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Edit this car</h3>
        </div>
        <div class="modal-body gainsboro">
            <?php
            include 'editCarModal.php';
            ?>
        </div>
        <div class="modal-footer d-flex content-around">
        <h3 class="text-center">Item changes will be permanent !</h3>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
</body>
<script src="js/deleteCars.js"></script>
<script src="js/cars.js"></script>
<script src="js/loadCars.js"></script>
<script src="js/editCar.js"></script>
</html>
<?php

include 'connection.php';
?>

