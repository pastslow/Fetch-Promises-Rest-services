var containerCars = document.getElementById("carsDiv");
var elem = '';
var allCars = document.getElementById("allCars");
var loading = document.getElementById("loading");
// create a fetch that parse data into an jason
fetch("http://localhost/listCars.php")
    .then(function (response) { 
        return response.json();
     })
    .then(function (data) {
        var myCars = data;
        console.log(myCars);
        insertCarsIntoHtml(myCars);
        allCars.style.display = "block";
        loading.style.display = "none";
    });

function insertCarsIntoHtml(dataCars) {
    for (i = 0; i < dataCars.length; i++) {
        // =============== Create a primary container ===================== //
        elem += "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center cars-data-container'>";
        // =============== Change car number Container =====================//
        elem += "<div class= 'd-flex content-around align-center'>";
        elem += "<div>"
        elem += `<button id='btnDelete${[i]}' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-trash'></span></button>`;
        elem += "</div>"
        elem += `<h3 class='text-greenyellow' id = 'CarNumber${[i]}'> ${dataCars[i].carNumbers}</h3>`;
        // =================== Edit button container =======================//
        elem += "<div>"
        elem += `<button class='btn btn-default btn-sm'><span class='glyphicon glyphicon-pencil'></span> Edit</button>`;
        elem += "</div>";
        // ================ End of car number container ====================//
        elem += "</div>";
        // ===================== Change Car Image ========================= //
        elem += "<div class='d-flex content-center car-image-container'>";
        elem += `<img id='carImage${[i]}' class='img-responsive' src='img/${dataCars[i].carColor}.png' />`;
        elem += "</div>";
        // =============== Container for time and model ====================//
        elem += "<div class='d-flex content-around'>";
        // ================= Container for time ============================//
        elem += "<div>";
        elem += `<h3 id = 'CarTime${[i]}'> ${dataCars[i].carTime}</h3>`;
        elem += "</div>";
        // ==================== Container for model ========================//
        elem += "<div>";
        elem += `<h3 id = 'CarModel${[i]}'> ${dataCars[i].carModel}</h3>`;
        elem += "</div>";
        // ========== End of container for time and model ==================//
        elem += "</div>";
        // ================= End of primary container ===================== //
        elem += "</div>";
    }

    containerCars.innerHTML = elem;
}