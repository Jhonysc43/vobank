var input_nome = document.getElementById('nome');
input_nome.addEventListener("focusout", validar_formulario)

var input_sobrenome = document.getElementById('sobrenome');
input_sobrenome.addEventListener("focusout", validar_formulario)

var input_cpf = document.getElementById('cpf');
input_cpf.addEventListener("focusout", validar_formulario)

var input_email = document.getElementById('email');
input_email.addEventListener("focusout", validar_formulario)

var input_senha = document.getElementById('senha');
input_senha.addEventListener("focusout", validar_formulario)

var botao_cadastro = document.getElementById("botao-cadastro");


// validando formulário
function validar_formulario(){


    var nome = document.getElementById('nome').value;
    var sobrenome = document.getElementById('sobrenome').value;
    var senha = document.getElementById('senha').value;
    var email = document.getElementById('email').value;
    var cpf = document.getElementById('cpf').value;


    if(nome.length === 0){
        var error_nome = document.getElementById('error_nome').innerHTML = "Campo vazio, prencha com seu primeiro nome";
        botao_cadastro.style.display="none"
        return false
    }else{
        error_nome = document.getElementById('error_nome').innerHTML = "";
        botao_cadastro.style.display="inline"
     }

     if(sobrenome.length === 0){
        var error_sobrenome = document.getElementById('error_sobrenome').innerHTML = "Campo vazio, prencha com seu sobrenome";
        botao_cadastro.style.display="none"
        return false

     }else{
         error_sobrenome = document.getElementById('error_sobrenome').innerHTML = ""
         botao_cadastro.style.display="inline"
     }

    if(cpf.length === 0 || isNaN(cpf)){
        var error_cpf = document.getElementById('error_cpf').innerHTML = "Campo vazio, informe apenas números e maior que 0";
        botao_cadastro.style.display="none"
        return false

    }else{
        error_cpf = document.getElementById('error_cpf').innerHTML = "";
        botao_cadastro.style.display = "inline";
    }
    if(email.length === 0){
        var error_email = document.getElementById('error_email').innerHTML = "Campo vazio, Informa um e-mail válido";
        botao_cadastro.style.display="none"
        return false

    }else{
        error_email = document.getElementById('error_email').innerHTML = "";
        botao_cadastro.style.display = "inline";
    }
    if(sobrenome.length === 0 ){
        var error_sobrenome = document.getElementById('error_sobrenome').innerHTML = "Campo vazio, prencha com seu sobrenome";
        botao_cadastro.style.display="none"
        return false

    }else{
        error_sobrenome = document.getElementById('error_sobrenome').innerHTML = "";
        botao_cadastro.style.display = "inline";
    }

    if(senha.length === 0 || senha.length < 7){
        var error_senha = document.getElementById('error_senha').innerHTML = "Campo vazio, Informe uma senha válida e maior que 6 caractere";
        botao_cadastro.style.display="none"
        return false

    }else{
        error_senha = document.getElementById('error_senha').innerHTML = "";
        botao_cadastro.style.display = "inline";
    }

}

