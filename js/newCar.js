
// ===========  Create a function that send a json(string) to server ================= //
function createNewCar(){
    //===================== Data for Jason that will be send to server ====================//
    var carNumber = document.getElementById("newCarNumberId").value;
    var carColor = valueOfColor;
    var carModel = document.getElementById("carNewModelId").value;
    fetch("http://localhost/newCar.php", {
    method: "POST",
    body: JSON.stringify({carNumber: carNumber, carColor: carColor, carModel: carModel})
    })
}