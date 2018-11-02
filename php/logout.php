<?php

	include "login.php";

	SESSION_START();
	
	unset($_SESSION['login_user']);
	unset($_SESSION['senha_user']);
	header('location:../index.php');


?>