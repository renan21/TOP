<?php 
	@$login = $_POST['login'];
	@$senha = $_POST['senha'];
	@$login_banco = null;
	@$senha_banco = null;
	

	
	include "conexao.php";
	
	$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE NOME = '$login' and senha = '$senha'");
	
	while ($exibe = mysqli_fetch_array ($sql)) {
		
		$login_banco = $exibe['nome'];
		$senha_banco = $exibe['senha'];	
			
	}
	
	if ($login != $login_banco && $senha != $senha_banco){
    	header("location: ../index.php");
		echo("não top");

	} else {
		SESSION_START();
		$_SESSION['login_user'] = $login;
		$_SESSION['senha_user'] = $senha;
		header("location: ../home.php");
		echo("top");
	}
	 

	
?>