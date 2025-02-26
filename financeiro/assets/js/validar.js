// $ = Chamada da Biblioteca JQuery.

// Validações de Campos: Tela de Login.
function ValidarLogin(){
    if($("#emailUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#emailUsuario").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

// Validações de Campos: Tela de Cadastro.
function ValidarCadastro(){
    if($("#nomeUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nomeUsuario").focus();
        return false;
    }
    
    if($("#emailUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#emailUsuario").focus();
        return false;
    }
    
    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }
    
    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().trim() != $("#repSenha").val().trim()){
        alert("A SENHA digitada deve ser igual no campo REPETIR SENHA!");
        $("#repSenha").focus();
        return false;
    }
}

// Validações de Campos: Tela de Meus Dados.
function ValidarMeusDados(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nome").focus();
        return false;
    }
    
    if($("#email").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#email").focus();
        return false;
    }
    
    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }
    
    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

// Validações de Campos: Tela de Cadastro e Alteração de Categoria.
function ValidarCategoria(){
    if($("#nomeCat").val().trim() == ''){
        alert("Preencha o campo NOME DA CATEGORIA!");
        $("#nomeCat").focus();
        return false;
    }
}

// Validações de Campos: Tela de Cadastro e Alteração de Empresa.
function ValidarEmpresa(){
    if($("#nomeEmp").val().trim() == ''){
        alert("Preencha o campo NOME DA EMPRESA!");
        $("#nomeEmp").focus();
        return false;
    }
    
    if($("#telefone").val().trim() == ''){
        alert("Preencha o campo TELEFONE!");
        $("#telefone").focus();
        return false;
    }

    if($("#endereco").val().trim() == ''){
        alert("Preencha o campo ENDEREÇO!");
        $("#endereco").focus();
        return false;
    }
}

// Validações de Campos: Tela de Cadastro e Alteração de Conta.
function ValidarConta(){
    if($("#banco").val().trim() == ''){
        alert("Preencha o campo NOME DO BANCO!");
        $("#banco").focus();
        return false;
    }
    
    if($("#agencia").val().trim() == ''){
        alert("Preencha o campo NÚMERO DA AGÊNCIA!");
        $("#agencia").focus();
        return false;
    }
    
    if($("#numero").val().trim() == ''){
        alert("Preencha o campo NÚMERO DA CONTA!");
        $("#numero").focus();
        return false;
    }
    
    if($("#saldo").val().trim() == ''){
        alert("Preencha o campo SALDO (R$)!");
        $("#saldo").focus();
        return false;
    }
}

// Validações de Campos: Tela de Realizar Movimento.
function ValidarMovimentos(){
    if($("#tipo").val() == ''){
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipo").focus();
        return false;
    }

    if($("#data").val() == ''){
        alert("Selecione uma DATA!");
        $("#data").focus();
        return false;
    }

    if($("#valor").val().trim() == ''){
        alert("Preencha o campo VALOR (R$)!");
        $("#valor").focus();
        return false;
    }

    if($("#categoria").val() == ''){
        alert("Selecione uma CATEGORIA FINANCEIRA!");
        $("#categoria").focus();
        return false;
    }

    if($("#empresa").val() == ''){
        alert("Selecione uma EMPRESA!");
        $("#empresa").focus();
        return false;
    }

    if($("#conta").val() == ''){
        alert("Selecione uma CONTA BANCÁRIA!");
        $("#conta").focus();
        return false;
    }
}

// Validações de Campos: Tela de Consultar Movimento.
function ValidarConsultaMovimento(){
    if($("#tipoMov").val().trim() == ''){
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipoMov").focus();
        return false;
    }

    if($("#dtInicio").val() == ''){
        alert("Selecione uma DATA DE INÍCIO!");
        $("#dtInicio").focus();
        return false;
    }

    if($("#dtFinal").val() == ''){
        alert("Selecione uma DATA FINAL!");
        $("#dtFinal").focus();
        return false;
    }
}