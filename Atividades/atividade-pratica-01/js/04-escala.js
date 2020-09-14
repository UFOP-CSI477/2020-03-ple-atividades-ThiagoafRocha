function calculoEscala(){
    let amp = document.formEscala.amp.value;
    let tempo = document.formEscala.tempo.value;

    let mag = (Math.log10(amp) + 3 * Math.log10(8*tempo) - 2.92).toFixed(1);

    document.getElementById("resultado").innerHTML = "Resultado = " +mag
    escreveMensagem(mag);
}

function escreveMensagem(magnitude){
    if (magnitude < 3.5){
        document.getElementById("mensagem").innerHTML = "Tremor geralmente não sentido, mas gravado.";
        document.getElementById("div-resposta").style.backgroundColor = "#0f6400";
        document.getElementById("div-resposta").style.color = "#FFF";
    }

    if (magnitude >= 3.5 && magnitude <= 5.4){
        document.getElementById("mensagem").innerHTML = "Tremor as vezes sentido, mas raramente causa danos.";
        document.getElementById("div-resposta").style.backgroundColor = "#1d99bb";
        document.getElementById("div-resposta").style.color = "#FFF";
    }

    if (magnitude >= 5.5 && magnitude <= 6.0){
        document.getElementById("mensagem").innerHTML = "Tremor que, no máximo, causa pequenos danos a prédios bem construídos," +
        " mas pode danificar seriamente casa mal construídas em regiões próximas.";
        document.getElementById("div-resposta").style.backgroundColor = "#ffd20a";
        document.getElementById("div-resposta").style.color = "#FFF";
    }
    
    if (magnitude >= 6.1 && magnitude <= 6.9){
        document.getElementById("mensagem").innerHTML = "Tremor que pode ser destrutivo em áreas em torno de até 100km do epicentro."
        document.getElementById("div-resposta").style.backgroundColor = "#f00640";
        document.getElementById("div-resposta").style.color = "#FFF";
    }

    if (magnitude >= 7.0 && magnitude <= 7.9){
        document.getElementById("mensagem").innerHTML = "Grande terremoto. Pode causar sérios danos numa grande faixa.";
        document.getElementById("div-resposta").style.backgroundColor = "#f00640";
        document.getElementById("div-resposta").style.color = "#FFF";
    }

    if (magnitude >= 8){
        document.getElementById("mensagem").innerHTML = "Enorme terremoto. Pode causar graves danos em muitas" + 
        " áreas mesmo que estejam a centenas de quilômetros.";
        document.getElementById("div-resposta").style.backgroundColor = "#f00640";
        document.getElementById("div-resposta").style.color = "#FFF";
    }
}