


// fetch("http://localhost/listCars.php")
// .then(function (response) {
//     return response.json();
// })
// .then(function (data) {
//     var myCars = data;
//     deleteCarOnClick(myCars);
//     allCars.style.display = "block";
//     loading.style.display = "none";
// });

// create a fetch that make a jason and send it to server

var delCarNumber = document.getElementById("delCarNumber");
var delCarImg = document.getElementById("delCarImg");
var delCarTime = document.getElementById("delCarTime");
var delCarId = document.getElementById("delCarId");
var delCarModel = document.getElementById("delCarModel");
var divId = "";
var idValue = document.getElementById("idValue");

function openDeleteCarPopUp(divCarId, CarNumber, CarImage, CarTime, CarId, CarModel) {
    var CarNumber = document.getElementById(CarNumber);
    var CarImage = document.getElementById(CarImage);
    var CarTime = document.getElementById(CarTime);
    var CarId = document.getElementById(CarId);
    var CarModel = document.getElementById(CarModel);
    var divCarId = document.getElementById(divCarId);
    
    delCarNumber.innerText = CarNumber.innerText;
    delCarImg.src = CarImage.src;
    delCarTime.innerText = CarTime.innerText;
    delCarId.innerText = CarId.innerText;
    delCarModel.innerText = CarModel.innerText;
    divId = divCarId.id;
    idValue.value = CarId.innerText;
}

function deleteSelectedCar(divCarId){
    fetch("http://localhost/deleteCar.php", {
        method: "DELETE",
        body: JSON.stringify({id: delCarId.innerText})
    }); 
    var divCarId = document.getElementById(divCarId);
    $(divCarId).remove();
}
