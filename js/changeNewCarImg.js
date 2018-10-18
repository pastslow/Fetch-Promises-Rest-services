var imgCarNew = document.getElementById("imgCarNew");
var valueOfColor = "black";
function changeImageOfNewCar(color){
    imgCarNew.src = `img/${color}.png`;
    valueOfColor = color;
}