<!DOCTYPE html >
<html>
	<?php 
		include('php/head.php');
		include ('php/conexao.php');
	?>
 
	<body>
		<?php	include('php/barra.php');	?>			
		</div>
		<div id="bloco-esquerdo">
		<form action="" method="POST">
			<table class="esquerda">
				<tr>
					<td>ID chamado:</td>
					<td> <input class="inp_sel"></td>
				</tr>
				<tr>
					<td>Titulo:</td>
					<td><input class="inp_sel"></td>
				</tr>
				<tr>
					<td>Solicitante:</td>
					<td><select class="inp_sel"></td>
				</tr>
				<tr>
					<td>Empresa:</td>
					<td><select class="inp_sel"></td>
				</tr>
				<tr>
					<td>Setor:</td>
					<td><select class="inp_sel"></td>
				</tr>
				<tr>
					<td>Prioridade:</td>
					<td><select class="inp_sel" name="prioridade">
						<?php
					
							$prioridade = mysqli_query($link, "SELECT * FROM prioridade");
						
							while ($exibe = mysqli_fetch_assoc ($prioridade)) {?>
		
								<option value="<?php echo $exibe['id_prioridade'];?>">
								<?php echo $exibe['prioridade']; ?>
								</option><?php
			
							}
					
						?>
										
					</select></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td><select class="inp_sel" name="status">						
						<?php
						
							$status = mysqli_query($link, "SELECT * FROM status");
							
								while ($exibe = mysqli_fetch_assoc ($status)) {?>
			
									<option value="<?php echo $exibe['id_status'];?>">
									<?php echo $exibe['status']; ?>
									</option><?php
				
								}
						
						?>
					</select></td>
				</tr>
				<tr>
					<td class="salvar" colspan="2"><button class="salvar" >Salvar</button></class></td>
				</tr>
			</table>
		</form>
		</div>
		<div id="bloco-direito">
		
			<table class="direita">
				<tr>
					<td>Cliente:</td>
					<td  colspan="4"><input class="endcli"></td>
				</tr>
				<tr>
					<td>Endereço:</td>
					<td colspan="4"><input class="endcli"></td>

				</tr>
				<tr>
					<td>Cidade:</td>
					<td><input class="td_esquerdo"></td>
					<td>UF:</td>
					<td><input class="td_esquerdo"></td>					
				</tr>
				<tr>
					<td>RG:</td>
					<td><input class="td_esquerdo"></td>
					<td>CPF:</td>
					<td><input class="td_esquerdo"></td>
				</tr>
					<tr>
					<td>TEL:</td>
					<td><input class="td_esquerdo"></td>
					<td>CEL:</td>
					<td><input class="td_esquerdo"></td>
				</tr>
				<tr>
					<td>Descrição:</td>
				</tr>
				<tr>				
					<td colspan="4"><input class="desc"></td>
				</tr>

			</table>
		</div>
		
	</body>
</html>