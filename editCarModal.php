
    <!-- ========================== container for new car ===============================-->
    <div class="cars-data-container text-center margin-left margin-right margin-top-80">
        <!-- ===================== container fir car number============================= -->
        <div>
            <input onkeyup="checkIfNumberOfNewCarIsCorrect()" class="input-top" type="text" id="editCarNumberId" />
        </div>
        <!-- ====================== container for car image =============================-->
        <div class="margin-10 container-new-car">
            <img id='imgCarEditId' class="img-responsive" src="img/black.png" alt="" />
        </div>
        <!-- ======================== container for color  ==============================-->
        <div class="d-flex content-center">
            <div onclick="changeImageOfEditCar('red')" class="bg-red opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('blue')" class="bg-blue opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('green')" class="bg-green opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('pink')" class="bg-pink opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('yellow')" class="bg-yellow opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('orange')" class="bg-orange opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('gray')" class="bg-gray opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('black')" class="bg-black opacity-05 width-20 height-20 margin-1">
            </div>
            <div onclick="changeImageOfEditCar('white')" class="bg-white opacity-05 width-20 height-20 margin-1">
            </div>
        </div>
        <!-- ======================== container for model  ==============================-->
        <div class='d-flex content-around'>
            <input onkeyup="checkIfNumberOfNewCarIsCorrect()" class="input" type="text" id="carEditTime" />
            <input onkeyup="checkIfNumberOfNewCarIsCorrect()" class="input" type="text" id="carEditModalId" />
        </div>
        <div id="successBtn2" class="">
            <button type='button' data-dismiss="modal" onclick="editCar()" class="btn btn-default">
            <span class="glyphicon glyphicon-ok text-success">
            </button>
            </span>
        </div>
        
    </div>
    <!-- ========================== end of new car container ============================-->