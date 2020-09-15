function validaTamanho(campo){

    let valor = campo.value;

    if (valor.length === 0){
        window.alert("Campo não pode ser nulo!");
        campo.focus();
        return false;
    }

    return true;
}

function validaCPF(campoCPF){
    let valor = campoCPF.value;

    if (valor.length > 14){
        window.alert("Campo CPF não pode er mais que 14 caracteres!");
        campo.focus();
        return false;
    }

    return true;
}

function cadastrar(){
    let campoNome = document.formCad.campoNome;
    let campoCPF = document.formCad.campoCPF;
    let campoData = document.formCad.campoData;
    let campoEndereco = document.formCad.campoEndereco;
    let campoTel = document.formCad.campoTel;
    let campoEmail = document.formCad.campoEmail;
    let campoUser = document.formCad.campoUser;
    let campoSenha = document.formCad.campoSenha;
    let flag = true;

    const campos = [campoNome, campoCPF, campoData, campoEndereco, campoTel, campoEmail, campoUser, campoSenha];

    
    campos.forEach(campo => {
        if(!validaTamanho(campo)){
            flag = false;
        }
    });

    if(!validaCPF(campoCPF)){
        flag = false;
    }

    if (flag){
        window.alert("Cadastro realizado");
        return true;
    }

    return false;
}