<?php

    $login = filter_input(INPUT_POST, "login");
    $senha = filter_input(INPUT_POST, "senha");
    
    if($login == "" || $senha == ""){
        header("location: ../index.php?msg=Os campos não podem ficar em branco");
    }else{
        include "conexao.php";

        $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE NOME = '$login' and senha = '$senha'");

        while ($exibe = mysqli_fetch_array($sql)) {
            $login_banco = $exibe['nome'];
            $senha_banco = $exibe['senha'];
        }

        if ($login != $login_banco && $senha != $senha_banco) {
            header("location: ../index.php?msg=Login/senha incorretos");
        } else {
            session_start();
            $_SESSION['login_user'] = $login;
            $_SESSION['senha_user'] = $senha;
            header("location: ../home.php");
        }
    }
?>