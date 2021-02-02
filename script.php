<?php

session_start();

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];


if (empty($nome)){
    //echo 'O nome não pode ser vazio, por favor preencha-o novamente';
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header('location: index.php');
    return;
}

if (strlen($nome) < 3){
    //echo "O nome precisar ter mais de 3 caracteres";
    $_SESSION['mensagem-de-erro'] = 'O nome precisar ter mais de 3 caracteres';
    header('location: index.php');
    return;
}

if (strlen($nome) > 40){
    //echo "O nome só pode conter até 40 caracteres";
    $_SESSION['mensagem-de-erro'] = "O nome só pode conter até 40 caracteres";
    header("location: index.php");
    return;
}

if ($idade >= 6 && $idade <= 12){
    
    for ($c = 0 ; $c <= count($categorias); $c++){
        
        if ($categorias[$c] == "infantil") {
            echo "A pessoa ".$nome." ira competir na categoria ".$categorias[$c];
            $_SESSION["mensagem-de-sucesso"] = "A pessoa ".$nome." ira competir na categoria ".$categorias[$c];
            header("location: index.php");  
        }  
    }
}

if ($idade > 12 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == "adolescente"){
            echo "O competidor ".$nome." irá competir na modalidade ".$categorias[$i];
            $_SESSION["mensagem-de-sucesso"] = "O competidor ".$nome." irá competir na modalidade ".$categorias[$i];
            header("location: index.php");  
        }
    }
}
else{
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == "adulto"){
            echo "O competidor ".$nome." irá competir na modalidade ".$categorias[$i];
            $_SESSION["mensagem-de-sucesso"] = "A pessoa ".$nome." ira competir na categoria ".$categorias[$i];
            header("location: index.php");  
        }
    }
}