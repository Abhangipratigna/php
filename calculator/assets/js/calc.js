function calAll() {
    document.getElementsById("result").value = "";
}

function getAllValues(val) {
    document.getElementsById("result").value += val;
}

function slcdata() {
    var slc = document.getElementsById("result").value;
    var res = slc.slice(0, -1);
    document.getElementById("result").value = res;
}

function finalresult() {
    var x = document.getElementsById("result").value;
    var y = eval(x);
    document.getElementById("result").value = y;
}

function sq() {
    var num = document.getElementById("result").value;
    var res = Math.pow(num, 2);
    document.getElementById("result").value = res;
}

function sqRoot() {
    var num = document.getElementById("result").value;
    var res = Math.pow(num, 2);
    document.getElementById("result").value = res;
}