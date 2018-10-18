var editCarNumberId = document.getElementById("editCarNumberId");
var imgCarEditId = document.getElementById("imgCarEditId");
var carEditModalId = document.getElementById("carEditModalId");
var carEditTime = document.getElementById("carEditTime");
var carEditId = "";

var curentImg;
var curentNumber;
var curentModel;
var curentTime;


function openEditCarPopUp(divCarId, carNumber, carImage, carModel, carTime, carId) {
    var carNumber = document.getElementById(carNumber);
    var carImage = document.getElementById(carImage);
    var carModel = document.getElementById(carModel);
    var divCarId = document.getElementById(divCarId);
    var carTime = document.getElementById(carTime);
    var carId = carId;
    
    
    carEditId = carId;
    editCarNumberId.value = carNumber.innerText;
    imgCarEditId.src = carImage.src;
    carEditModalId.value = carModel.innerText;
    carEditTime.value = carTime.innerText
    
    curentImg = carImage;
    curentNumber = carNumber;
    curentModel = carModel;
    curentTime = carTime;
}

// ============ Create a function that send a jason(string) to server =======//
function editCar(){
    fetch('http://localhost/editCar.php', {
        method: 'PUT',
        body: JSON.stringify({
            id:carEditId, 
            carNumber: editCarNumberId.value, 
            carColor: valueOfEditCarColor,
            carModel: carEditModalId.value,
            carTime: carEditTime.value,
        })
    })
    madeChangesVisualOnHtml();
}
function madeChangesVisualOnHtml(){
    curentNumber.innerText = editCarNumberId.value;
    curentModel.innerText = carEditModalId.value;
    curentTime.innerText = carEditTime.value;
    curentImg.src = imgCarEditId.src;
}
