var imgCarNew = document.getElementById("imgCarNew");
var newCarColor = 'black';
function changeImageOfNewCar(color){
    imgCarNew.src = `img/${color}.png`;
    newCarColor = color;
}