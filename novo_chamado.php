<!DOCTYPE html >
<html>
	<?php 
		include('php/head.php');
		include ('php/conexao.php');
	?>
 
	<body>
		<?php	
		
		    include('php/barra.php');		
    		$id = mysqli_query($link, "SELECT count(id_chamado) FROM chamados");  
    		
    		if ($id->num_rows > 0) {
    		    // output data of each row
    		    $row = $id->fetch_assoc();
    		}
    		foreach ($row as $idchamado){
    		    
    		}
    	       
    		$idchamado = $idchamado +1;
		      
		?>			
		</div>
		<form action="php/novo_chamadoForm.php" method="POST">
    		<div id="bloco-esquerdo">
    		
    			<table class="esquerda">
    				<tr>
    					<td>ID chamado:</td>
    					<td> <input name="idChamado" readonly="true" class="inp_sel" value="<?php echo $idchamado?>"></td>
    				</tr>
    				<tr>
    					<td>Titulo:</td>
    					<td><input name="titulo" class="inp_sel"></td>
    				</tr>
    				<tr>
    					<td>Solicitante:</td>
    					<td><input name="solicitante" readonly="true" class="inp_sel" value="tem que fazer pegar da sessão"></td>
    				</tr>
    				<tr>
    					<td>Empresa:</td>
    					<td><select name="empresa" class="inp_sel" name="empresa" >
    						<?php
    					
    							$empresa = mysqli_query($link, "SELECT * FROM empresas");
    						
    							while ($exibe = mysqli_fetch_assoc ($empresa)) {?>
    		
    								<option value="<?php echo $exibe['id_empresas'];?>">
    								<?php echo $exibe['nome_fantasia']; ?>
    								</option><?php
    			
    							}
    					
    						?>
    													
    					</select></td>
    					
    					
    				</tr>
    				<tr>
    					<td>Setor:</td>
    					<td><select name="setor" class="inp_sel" name="setor">
    						<?php
    					
    							$setor = mysqli_query($link, "SELECT * FROM setores");
    						
    							while ($exibe = mysqli_fetch_assoc ($setor)) {?>
    		
    								<option value="<?php echo $exibe['id_setor'];?>">
    								<?php echo $exibe['nome']; ?>
    								</option><?php
    			
    							}
    					
    						?>
    													
    					</select></td>
    				</tr>
    				<tr>
    					<td>Prioridade:</td>
    					<td><select name="prioridade" class="inp_sel" name="prioridade">
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
    					<td><select name="status" class="inp_sel" name="status">						
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
    					<td class="salvar" colspan="2"><button class="salvar" type="submit">Salvar</button></class></td>
    				</tr>
    			</table>
    		
    		</div>
    		<div id="bloco-direito">
    		
    			<table class="direita">
    				<tr>
    					<td>Cliente:</td>
    					<td  colspan="4"><input name="cliente" class="cli"></td>
    				</tr>
    				<tr>
    					<td>Endereço:</td>
    					<td ><input name="endereco" class="end"></td>
    					<td>Número:</td>
    					<td><input name="numero" class="td_esquerdo"></td>
    
    				</tr>
    				<tr>
    					<td>Cidade:</td>
    					<td><input name="cidade" class="td_esquerdo"></td>
    					<td>UF:</td>
    					<td><input name="uf" class="td_esquerdo"></td>					
    				</tr>
    				<tr>
    					<td>TEL:</td>
    					<td><input name="tel" class="td_esquerdo"></td>
    					<td>CEL:</td>
    					<td><input name="cel" class="td_esquerdo"></td>
    				</tr>
    				<tr>
    					<td>Descrição:</td>
    				</tr>
    				<tr>				
    					<td colspan="4"><textArea name="descricao" class="desc"></textArea></td>
    				</tr>
    
    			</table>
    		
    		</div>
		</form>
	</body>
</html>