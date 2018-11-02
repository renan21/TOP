<?php
    include './conexao.php';

    $nome = filter_input(INPUT_POST, "nome");
    $descricao = filter_input(INPUT_POST, "descricao");
    $empresa = filter_input(INPUT_POST, "empresa");

    $msg = "Erros:";
    $hasError = false;

    if($nome == ""){$hasError = true; $msg .= "<br>Preencha o campo nome";}
    if($descricao == ""){$hasError = true; $msg .= "<br>Preencha o campo descrição";}
    if($empresa == ""){$hasError = true; $msg .= "<br>Preencha o campo empresa";}
   
    if($hasError){
        echo $msg;
    }else{
        $result = mysqli_query($link, "
            INSERT INTO `setores`(`nome`, `descricao`, `empresa`) VALUES (
                '$nome',
                '$descricao',
                $empresa
            )
            ");
        echo "?msg=Setor $nome cadastrado com sucesso&id=cad_setor";
    }
