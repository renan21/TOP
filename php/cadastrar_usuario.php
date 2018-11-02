<?php

    include './conexao.php';

    $nome_completo = filter_input(INPUT_POST, "nome_completo");
    $email = filter_input(INPUT_POST, "email");
    $senha = filter_input(INPUT_POST, "senha");
    $csenha = filter_input(INPUT_POST, "csenha");
    $telefone = filter_input(INPUT_POST, "telefone");
    $empresa = filter_input(INPUT_POST, "empresa");
    $tipo = filter_input(INPUT_GET, "tipo");
    
    $setor = filter_input(INPUT_POST, "setor");
    $tipo_usuario = 0;
    
    $str_id = "";
    switch ($tipo){
        case 1:{
            $setor = 1;
            $tipo_usuario = 1;
            $str_id = "cad_responsavel";
            break;
        }
        case 2:{
            $tipo_usuario = 3;
            $str_id = "cad_interno";
            break;
        }
        case 3:{
            $tipo_usuario = 4;
            $str_id = "cad_externo";
            break;
        }
    }
    
    $msg = "Erros:";
    $hasError = false;

    if($nome_completo == ""){$hasError = true; $msg .= "<br>Preencha o campo nome completo";}
    if($email == ""){$hasError = true; $msg .= "<br>Preencha o campo email";}
    if($senha == ""){$hasError = true; $msg .= "<br>Preencha o campo senha";}
    if($csenha == ""){$hasError = true; $msg .= "<br>Preencha o campo confirme a senha";}
    if($senha != $csenha){$hasError = true; $msg .= "<br>Senha e confirme a senha não são iguais";}
    if($telefone == ""){$hasError = true; $msg .= "<br>Preencha o campo telefone";}
    if($empresa == ""){$hasError = true; $msg .= "<br>Selecione uma empresa";}
    if($setor == ""){$hasError = true; $msg .= "<br>Selecione um setor";}
    if($tipo == ""){$hasError = true; $msg .= "<br>tipo";}
   
    if($hasError){
        echo $msg;
    }else{
        $result = mysqli_query($link, "
            INSERT INTO `usuarios2`(`nome_completo`, `email`, `senha`, `telefone`, `id_setor`, `id_empresa`, `id_tipo_usuario`) VALUES (
                '$nome_completo',
                '$email',
                '$senha',
                '$telefone',
                $setor,
                $empresa,
                $tipo_usuario
            )
            ");
        echo "?msg=Usuário $nome_completo cadastrado com sucesso&id=$str_id";
    }