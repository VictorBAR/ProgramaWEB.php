<?php

function definirCategoriaCompetidor ($nome, $idade) : ?string {

    $categorias = [];
    $categorias[] = "infantil";
    $categorias[] = "adolescente";
    $categorias[] = "adulto";
        
    
    if (validarNome($nome)){
            
            removerMensagemErro();
            if ($idade >= 6 && $idade <= 12){

                for ($c = 0 ; $c <= count($categorias); $c++){
                    
                    if ($categorias[$c] == "infantil") {
                        setarMensagemSucesso("O competidor ".$nome." irá competir na categoria ".$categorias[$c]);
                        return null;
                    }  
                }
            }
            
            if ($idade > 12 && $idade <= 18){
                for ($i = 0; $i <= count($categorias); $i++){
                    if($categorias[$i] == "adolescente"){
                        setarMensagemSucesso("O competidor ".$nome." irá competir na modalidade ".$categorias[$i]);
                        return null;  
                    }
                }
            }
            else{
                for ($i = 0; $i <= count($categorias); $i++){
                    if ($categorias[$i] == "adulto"){
                        setarMensagemSucesso("O competidor ".$nome." irá competir na categoria ".$categorias[$i]);
                        return null;
                }
            }
        }
    }else {
        removerMensagemSucesso();
        return obterMensagemErro(); 
    }
}