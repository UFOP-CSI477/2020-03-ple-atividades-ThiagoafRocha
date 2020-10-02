function validaEquip(){
    let nome = document.getElementById('nome');

    if (!nome){
        window.alert("Campo nome não pode ser vazio");
        return false;
    }
    return true;
}

function validaReg(){
    let equipamento = document.getElementById('equipamento_id');
    let user = document.getElementById('user_id');
    let descricao = document.getElementById('descricao');
    let data = document.getElementById('datalimite');
    let tipo = document.getElementById('tipo');

    if (!equipamento){
        window.alert("Campo equipamento não pode ser vazio");
        return false;
    }

    if (!user){
        window.alert("Campo user não pode ser vazio");
        return false;
    }

    if (!descricao){
        window.alert("Campo descricao não pode ser vazio");
        return false;
    }

    if (!data){
        window.alert("Campo data não pode ser vazio");
        return false;
    }

    if (!tipo){
        window.alert("Campo tipo não pode ser vazio");
        return false;
    }

    return true;
}