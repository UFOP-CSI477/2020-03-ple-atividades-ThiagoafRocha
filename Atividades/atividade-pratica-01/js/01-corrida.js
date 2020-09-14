function Competidor(nome, tempo, pos) {
    this.nome = nome;
    this.tempo = tempo;
    this.pos = pos;
}

function resultado() {
    let nome;
    let tempo;
    let posicao;

    nome = document.formComp.comp1n.value;
    tempo = parseInt(document.formComp.comp1t.value);
    posicao = 1;
    let comp1 = new Competidor(nome, tempo, posicao);

    nome = document.formComp.comp2n.value;
    tempo = parseInt(document.formComp.comp2t.value);
    posicao = 2;
    let comp2 = new Competidor(nome, tempo, posicao);

    nome = document.formComp.comp3n.value;
    tempo = parseInt(document.formComp.comp3t.value);
    posicao = 3;
    let comp3 = new Competidor(nome, tempo, posicao);

    nome = document.formComp.comp4n.value;
    tempo = parseInt(document.formComp.comp4t.value);
    posicao = 4;
    let comp4 = new Competidor(nome, tempo, posicao);

    nome = document.formComp.comp5n.value;
    tempo = parseInt(document.formComp.comp5t.value);
    posicao = 5;
    let comp5 = new Competidor(nome, tempo, posicao);

    nome = document.formComp.comp6n.value;
    tempo = parseInt(document.formComp.comp6t.value);
    posicao = 6;
    let comp6 = new Competidor(nome, tempo, posicao);

    const listComp = [comp1, comp2, comp3, comp4, comp5, comp6];
    const listCompOrd = listComp.sort(function (a, b) {
        if (a.tempo > b.tempo) {
            return 1;
        }
        if (a.tempo < b.tempo) {
            return -1;
        }
        return 0;
    });



    let table = document.querySelector("#table-body");
    let i = 1;

    listCompOrd.forEach(competidor => {
        let competidorTr = document.createElement("tr");

        let posicaoTd = document.createElement("td");
        let nomeTd = document.createElement("td");
        let tempoTd = document.createElement("td");
        let largadaTd = document.createElement("td");
        let resultadoTd = document.createElement("td");

        posicaoTd.textContent = i++;
        nomeTd.textContent = competidor.nome;
        tempoTd.textContent = competidor.tempo;
        largadaTd.textContent = competidor.pos;
        if(competidor.tempo === listCompOrd[0].tempo){
            resultadoTd.textContent = "Vitória!";
        }

        competidorTr.appendChild(posicaoTd);
        competidorTr.appendChild(largadaTd);
        competidorTr.appendChild(nomeTd);
        competidorTr.appendChild(tempoTd);
        competidorTr.appendChild(resultadoTd);

        table.appendChild(competidorTr);

    });

}