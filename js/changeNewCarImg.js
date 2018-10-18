var imgCarNew = document.getElementById("imgCarNew");
var valueOfColor = "black";
var valueOfEditCarColor = "";

function changeImageOfNewCar(color){
    imgCarNew.src = `img/${color}.png`;
    valueOfColor = color;
}

function changeImageOfEditCar(color){
    var imgCarEditId = document.getElementById("imgCarEditId");
    imgCarEditId.src = `img/${color}.png`;
    valueOfEditCarColor = color;
}