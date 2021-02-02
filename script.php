<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];


if (empty($nome)){
    echo 'O nome não pode ser vazio, por favor preencha-o novamente';
    return;
}

if (strlen($nome) < 3){
    echo "O nome precisar ter mais de 3 caracteres";
    return;
}

if (strlen($nome) > 40){
    echo "O nome só pode conter até 40 caracteres";
    return;
}

if ($idade >= 6 && $idade <= 12){
    
    for ($c = 0 ; $c <= count($categorias); $c++){
        
        if ($categorias[$c] == "infantil") {
            echo "A pessoa ".$nome." ira competir na categoria ".$categorias[$c];
        }  
    }
}

if ($idade > 12 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == "adolescente"){
            echo "O competidor ".$nome." irá competir na modalidade ".$categorias[$i];
        }
    }
}
else{
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == "adulto"){
            echo "O competidor ".$nome." irá competir na modalidade ".$categorias[$i];
        }
    }
}