function verificaFaltas(){
    let faltas = document.getElementById('nfaltas').innerHTML;

    if(faltas < 12){
        document.getElementById('detalhes').style.backgroundColor = "green";
        document.getElementById('info-faltas').innerHTML = "Ainda não atingiu o limite de faltas"
    }

    if(faltas >= 12 && faltas < 18){
        document.getElementById('detalhes').style.backgroundColor = "yellow";
        document.getElementById('info-faltas').innerHTML = "Limites de faltas quase estourando"
    }

    if(faltas >= 18){
        document.getElementById('detalhes').style.backgroundColor = "red";
        document.getElementById('info-faltas').innerHTML = "Reprovado(a) por faltas"
    }
}