var reg = /^[A-Z/-]{3,3}[0-9/-]{3,3}[A-Z]{3,3}$/;
var success = document.getElementById("success");
var carNewModelId = document.getElementById("carNewModelId");

function checkIfNumberOfNewCarIsCorrect(){
    var newCarNumberId = document.getElementById("newCarNumberId").value;
    autoFill()
    if(reg.test(newCarNumberId) == true && carNewModelId.value != ""){
        success.style.display = "block";
    }else{
        success.style.display = "none";
    }
}
function autoFill(){
    if(newCarNumberId.value.length === 2){
        newCarNumberId.value += '-';
    }
    if(newCarNumberId.value.length === 5){
        newCarNumberId.value += '-';
    }
}