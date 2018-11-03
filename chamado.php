<!DOCTYPE html >
<html>
	<?php 
		include('php/head.php');
	?>
 
	<body>
		<div id="barra"></div> 
		<div id="menu">			
		</div>
		<div id="bloco-esquerdo">
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
					<td><input class="inp_sel"></td>
				</tr>
				<tr>				
					<td>Prioridade:</td>
					<td><select class="inp_sel"></td>
				</tr>
				<tr>				
					<td>Descrição:</td>
					<td><input class="inp_sel"></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td><select class="inp_sel"></td>
				</tr>
				<tr>
					<td class="salvar" colspan="2"><button class="salvar" >Salvar</button></class></td>
				</tr>
			</table>
			
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
					<td>Notas:</td>					
				</tr>
				<tr>				
					<table class="notas">
						<tr  class="notas">
							<td>
								Linha 2
							</td>
						</tr>
						<tr>
							<td>
								Linha 3
							</td>
						</tr>
						<tr class="notas">
							<td>
								Linha 4
							</td>
						</tr>
					</table>
				</tr>

			</table>
		</div>
		
	</body>
</html>