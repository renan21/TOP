<!DOCTYPE html >
<html>
	<?php 
		include('php/head.php');
	?>
 
	<body>
		<?php	include('php/barra.php');	?>
		<div id="export">
		
			<table class="direita">
				<tr>
					<td>De:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>Empresa:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>Solicitante:</td>
					<td  colspan="4"><input class="endcli"></td>
				</tr>
				<tr>
					<td>Até:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>Setor:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>Prioridade:</td>
					<td  colspan="4"><input class="endcli"></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>Cidade:</td>
					<td  colspan="4"><input class="endcli"></td>
					<td>UF:</td>
					<td  colspan="4"><input class="endcli"></td>					
				</tr>
				<tr>
					<td><button id="Limpar" >Limpar</button></td>
					<td><button id="pesquisar" >Pesquisar</button></td>
				</tr>
					
			</table>
			
			
			<div id="dados">
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
		</div>
	</body>
</html>
		
		