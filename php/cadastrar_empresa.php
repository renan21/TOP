<?php

    include './conexao.php';

    $razao_social = filter_input(INPUT_POST, "razao_social");
    $nome_fantasia = filter_input(INPUT_POST, "nome_fantasia");
    $cnpj = filter_input(INPUT_POST, "cnpj");
    $telefone = filter_input(INPUT_POST, "telefone");
    $email = filter_input(INPUT_POST, "email");
    $endereco = filter_input(INPUT_POST, "endereco");

    $msg = "Erros:";
    $hasError = false;

    if($razao_social == ""){$hasError = true; $msg .= "<br>Preencha a Razão Social";}
    if($nome_fantasia == ""){$hasError = true; $msg .= "<br>Preencha o Nome Fantasia";}
    if($cnpj == ""){$hasError = true; $msg .= "<br>Preencha o CNPJ";}
    if($telefone == ""){$hasError = true; $msg .= "<br>Preencha o Telefone";}
    if($email == ""){$hasError = true; $msg .= "<br>Preencha o Email";}
    if($endereco == ""){$hasError = true; $msg .= "<br>Preencha o Endereço";}
   
    if($hasError){
        echo $msg;
    }else{
        $result = mysqli_query($link, "
            INSERT INTO empresas(nome_fantasia, razao_social, cnpj, telefone, email, endereco) VALUES 
            (
                '$nome_fantasia',
                '$razao_social',
                '$cnpj',
                '$telefone',
                '$email',
                '$endereco'
            )
            ");
        echo "?msg=Empresa $nome_fantasia cadastrada com sucesso&id=cad_empresa";
    }
