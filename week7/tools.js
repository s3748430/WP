function calculatePrice(){
    alert("Calculate Price")
}

    function calculatePrice2(){
    alert("Calculate Price 2")
}

function clickP3(){
    alert("P3 click")
    event.stopImmediatePropagation();
}

var myButton = document.getElementById("price2");
myButton.onclick = calculatePrice2;
myButton.onclick = calculatePrice;


var myButton = document.getElementById("price3");
myButton.addEventListener("click" ,calculatePrice)
myButton.addEventListener("click", calculatePrice2)

var myP3 = document.getElementById("p3");
myP3.addEventListener("click", clickP3, true)