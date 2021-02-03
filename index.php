<?php
    include 'servicos/servicoMensagemSessao.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: black;
        color: white;
    }
    
    </style>
</head>
<body>
    <?php
        $mensagemDeErro = obterMensagemErro();    
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
        }
        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
    ?>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="post">
    <p>Seu nome <input type="text" name="nome" id=""></p>
    <p>Sua idade <input type="number" name="idade" id=""></p>
    <p> <input type="submit" value="INSCREVER COMPETIDOR"></p>
    </form>
</body>
</html>