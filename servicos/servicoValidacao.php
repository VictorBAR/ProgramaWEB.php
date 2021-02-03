<?php


function validarNome(String $nome) : bool {
    if (empty($nome)){
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }

    
    else if (strlen($nome) < 3){
        setarMensagemErro('O nome precisar ter mais de 3 caracteres');
        return false;
    }

    
    else if (strlen($nome) > 40){
        setarMensagemErro("O nome só pode conter até 40 caracteres");
        return false;
    }
    return true;
}