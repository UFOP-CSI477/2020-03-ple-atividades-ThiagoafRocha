function validacoes() {

    let id = document.getElementById("id").value;
    let nome = document.getElementById("nome").value;
    let um = document.getElementById("um").value;

    let flag1 = validaId(id);
    let flag2 = validaNome(nome);

    if (!flag1 || !flag2) {

        if(!flag1){
            window.alert("Id inválido!");
        }

        if(!flag2){
            window.alert("Nome inválido!");
        }
        return false;
    }
    return true;
}

function validaId(id) {

    if (parseInt(id))
        return true;

    return false;
}

function validaNome(nome) {

    var matches = nome.match(/(\d+)/);

    if (matches)
        return false;

    return true;
}
