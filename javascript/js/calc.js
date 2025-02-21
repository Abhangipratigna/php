
function clr() {
    document.getElementById("result").value = "";
}

function getValue(val) {
    document.getElementById("result").value += val;
}

function sq() {
    var num = document.getElementById("result").value;
    var result = Math.pow(num, 2);
    document.getElementById("result").value = result;
}