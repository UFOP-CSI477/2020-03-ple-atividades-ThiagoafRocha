var flag = true;

function btn1() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 1;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 1;
    }

    console.log(flag);
}

function btn2() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 2;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 2;
    }
}

function btn3() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 3;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 3;
    }
}

function btn4() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 4;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 4;
    }
}

function btn5() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 5;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 5;
    }
}

function btn6() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 6;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 6;
    }
}

function btn7() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 7;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 7;
    }
}

function btn8() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 8;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 8;
    }
}

function btn9() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 9;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 9;
    }
}

function btn0() {
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = 0;
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + 0;
    }
}

function btndot(){
    let atual = document.getElementById("resultado").textContent;
    if (flag == true) {
        document.getElementById("resultado").innerHTML = ".";
        flag = false;
    } else {
        document.getElementById("resultado").innerHTML = atual + ".";
    }
}

function btnClear(){
    document.getElementById("resultado").innerHTML = '';
}

function btnMais() {
    let atual = document.getElementById("resultado").textContent;
    if (!atual) {
        document.getElementById("resultado").innerHTML = null;
    } else {
        document.getElementById("resultado").innerHTML = atual + "+";
        flag= false;
    }
}

function btnMenos() {
    let atual = document.getElementById("resultado").textContent;
    if (!atual) {
        document.getElementById("resultado").innerHTML = null;
    } else {
        document.getElementById("resultado").innerHTML = atual + "-";
        flag= false;
    }
}

function btnMult() {
    let atual = document.getElementById("resultado").textContent;
    if (!atual) {
        document.getElementById("resultado").innerHTML = null;
    } else {
        document.getElementById("resultado").innerHTML = atual + "*";
        flag= false;
    }
}

function btnDiv() {
    let atual = document.getElementById("resultado").textContent;
    if (!atual) {
        document.getElementById("resultado").innerHTML = null;
    } else {
        document.getElementById("resultado").innerHTML = atual + "/";
        flag= false;
    }
}

function btnResultado() {
    let resultado = eval(document.getElementById("resultado").textContent);
    document.getElementById("resultado").innerHTML = resultado;
    flag = true;
}