function calculo(){
    calculoImc();
    calculaImcIdeal();
}

function calculoImc(){
    let altura = document.formImc.altura.value;
    let peso = document.formImc.peso.value;

    let imc = (peso / (altura * altura)).toFixed(1);

    document.getElementById("resultado").innerHTML = "Resultado= " + imc
    escreveMensagem(imc);
}

function escreveMensagem(imc){
    if (imc < 18.5){
        document.getElementById("mensagem").innerHTML = "Estado: Subnutrição";
        document.getElementById("div-resultado").style.backgroundColor = "#f00640";
        document.getElementById("div-resultado").style.color = "#FFF";
    }

    if (imc >= 18.5 && imc <= 24.9){
        document.getElementById("mensagem").innerHTML = "Estado: Peso saudável";
        document.getElementById("div-resultado").style.backgroundColor = "#0f6400";
        document.getElementById("div-resultado").style.color = "#FFF";
    }

    if (imc >= 25 && imc <= 29.9){
        document.getElementById("mensagem").innerHTML = "Estado: Sobrepeso";
        document.getElementById("div-resultado").style.backgroundColor = "#ffd20a";
        document.getElementById("div-resultado").style.color = "#FFF";
    }
    
    if (imc >= 30 && imc <= 34.9){
        document.getElementById("mensagem").innerHTML = "Estado: Obesidade grau 1";
        document.getElementById("div-resultado").style.backgroundColor = "#f00640";
        document.getElementById("div-resultado").style.color = "#FFF";
    }

    if (imc >= 35 && imc <= 39.9){
        document.getElementById("mensagem").innerHTML = "Estado: Obesidade grau 2";
        document.getElementById("div-resultado").style.backgroundColor = "#f00640";
        document.getElementById("div-resultado").style.color = "#FFF";
    }

    if (imc >= 40){
        document.getElementById("mensagem").innerHTML = "Estado: Obesidade grau 3";
        document.getElementById("div-resultado").style.backgroundColor = "#f00640";
        document.getElementById("div-resultado").style.color = "#FFF";
    }
}

function calculaImcIdeal(){
    let altura = document.formImc.altura.value;

    let pesomax = ((altura * altura) * 24.9).toFixed(2);
    let pesomin = ((altura * altura) * 18.5).toFixed(2);

    document.getElementById("peso-ideal").innerHTML = `O intervalo de peso ideal para esta altura é ${pesomin}kg` +
    ` até ${pesomax}kg.`
}