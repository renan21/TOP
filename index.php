<!DOCTYPE html >
<html>
	
	<?php include('php/head.php'); 	?>

	<body>
		<img src="img/logoTop.png">
		<div class="logar">
			<form action="php/login.php" method="POST">
			
				
				<table class="logar">	
					<tr>
						<td>Login:</td>
						<td><input type="text" name="login"></td>
					</tr>
						<td>Senha:</td>
						<td><input type="password" name="senha" id="senha"></td>
					</tr>
						<td colspan="2"><button class="botao" type="submit" name="logar">Login</button></td>
					</tr>
				</table>
			</form>
		</div>
			
		<div id="tela"></div>
		<div id="texto">
			<a target="_blank" href="">Sobre &emsp;</a>
			<a target="_blank" href="">Termos de uso </a>				
		</div>
		
	</body>
</html>

