<!DOCTYPE html >
<html>
	<?php 
		include('php/head.php');
		include ('php/conexao.php');
		
		SESSION_START();
		
//		$log = $_SESSION['login_user'];
//		$pass = $_SESSION['senha_user'];
//	
//		$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE nome = '$log' and senha = '$pass'");
//
//		while ($exibe = mysqli_fetch_array ($sql)) {
//		
//			$login = $exibe['nome'];
//			$senha = $exibe['senha'];	
//			
//		}
//				
//		if($login != "" && $senha != ""){
//
//		} else {
//			header('location:../index.php');
//		}
	?>
 
	<body>
		<?php	include('php/barra.php');	?>
			
		</div>

			<table class="chamado">
				<tr class="chamado">
					<td class="cabecalho">ID</td>
					<td class="cabecalho">Titulo</td>
					<td class="cabecalho">Prioridade</td>
					<td class="cabecalho">Status</td>
					<td class="cabecalho">Data abertura</td>
					<td class="cabecalho">SLA</td>
				</tr>
				<tr>
					<td>
						Linha 2
					</td>
				</tr>
				<tr class="chamado">
					<td>
						Linha 3
					</td>
				</tr>
				<tr class="chamado">
					<td>
						Linha 4
					</td>
				</tr>
			</table>			
		</div>
		
	</body>
</html>