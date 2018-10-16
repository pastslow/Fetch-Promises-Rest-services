var imgCarNew = document.getElementById("imgCarNew");
var valueOfColor = document.getElementById("valueOfColor");
function changeImageOfNewCar(color){
    imgCarNew.src = `img/${color}.png`;
    valueOfColor.value = color;
}