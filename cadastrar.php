<html>
    <?php 
    include './php/head.php';
    include './php/conexao.php';?>
    
    <body style="background-color: #EEE;">
        <?php include('php/barra.php');?>
        <div class="row" style="width: 96%; margin: 0 auto;">
            <div class="col-md-4" style="padding: 5px">
                <div style="background-color: white; border: 1px solid #cccccc;">
                    <table class="table-select">
                        <tr>
                            <td idform="cad_empresa">
                                Cadastrar empresa
                            </td>
                        </tr>
                        
                        <tr>
                            <td idform="cad_responsavel">
                                Cadastrar responsavel
                            </td>
                        </tr>
                        
                        <tr>
                            <td idform="cad_setor">
                                Cadastrar setor
                            </td>
                        </tr>
                        
                        <tr>
                            <td idform="cad_interno">
                                Cadastrar usuário (interno)
                            </td>
                        </tr>
                        
                        <tr>
                            <td idform="cad_externo">
                                Cadastrar usuário (externo)
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-8" style="padding: 5px">
                <div style="background-color: white; border: 1px solid #cccccc; padding: 20px;">
                    
                    <form id="cad_empresa" action="php/cadastrar_empresa.php" method="POST">
                        <h1>Empresa</h1>
                        <div  class="cadastro-forms">
                            <label for="razao_social">Razão social:</label><br>
                            <input type="text" name="razao_social" value="" /><br><br>
                            <label for="nome_fantasia">Nome fantasia:</label><br>
                            <input type="text" name="nome_fantasia" value="" /><br><br>
                            <label for="cnpj">CNPJ:</label><br>
                            <input type="text" maxlength="14" name="cnpj" value="" /><br><br>
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" maxlength="10" name="telefone" value="" /><br><br>
                            <label for="email">Email:</label><br>
                            <input type="email" name="email" value="" /><br><br>
                            <label for="endereco">Endereço:</label><br>
                            <input type="text" name="endereco" value="" /><br><br>
                            <input id="btn_empresa" type="button" value="Cadastrar" class="btn btn-success"/>
                        </div>
                    </form>
                    
                    <form id="cad_responsavel" action="php/cadastrar_usuario.php?tipo=1" method="POST">
                        <h1>Usuário responsável</h1>
                        <div class="cadastro-forms">
                            <label for="nome_completo">Nome completo:</label><br>
                            <input type="text" name="nome_completo" value="" /><br><br>
                            <label for="email">Email:</label><br>
                            <input type="text" name="email" value="" /><br><br>
                            <label for="senha">Senha:</label><br>
                            <input type="text" name="senha" value="" /><br><br>
                            <label for="senha">Confirme a senha:</label><br>
                            <input type="csenha" name="csenha" value="" /><br><br>
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" name="telefone" value="" /><br><br>
                            <label for="empresa">Empresa:</label><br>
                            <select name="empresa">
                                <?php 
                                    $empresas = "<option value=''>-- Selecione uma empresa --</option>\n";
                                    $result = mysqli_query($link, "SELECT id_empresas, nome_fantasia FROM empresas");
                                    while($row = mysqli_fetch_array($result)){
                                        $empresas .= "\n<option value='". $row['id_empresas'] ."'>". $row['nome_fantasia'] ."</option>";
                                    }
                                    echo $empresas;
                                ?>
                            </select> <br><br>
                            <input type="button" value="Cadastrar" class="btn btn-success"/>
                        </div>
                    </form>
                    
                    <form id="cad_setor" action="php/cadastrar_setor.php" method="POST">
                        <h1>Setor</h1>
                        <div class="cadastro-forms">
                            <label for="nome">Nome:</label><br>
                            <input type="text" name="nome" value="" /><br><br>
                            <label for="descricao">Descrição:</label><br>
                            <input type="text" name="descricao" value="" /><br><br>
                            <label for="empresa">Empresa:</label><br>
                            <select name="empresa">
                                <?php echo $empresas;?>
                            </select> <br><br>
                            <input type="button" value="Cadastrar" class="btn btn-success"/>
                        </div>
                    </form>
                    
                    <form id="cad_interno" action="php/cadastrar_usuario.php?tipo=2" method="POST">
                        <h1>Usuário interno</h1>
                        <div class="cadastro-forms">
                            <label for="nome_completo">Nome completo:</label><br>
                            <input type="text" name="nome_completo" value="" /><br><br>
                            <label for="email">Email:</label><br>
                            <input type="text" name="email" value="" /><br><br>
                            <label for="senha">Senha:</label><br>
                            <input type="text" name="senha" value="" /><br><br>
                            <label for="senha">Confirme a senha:</label><br>
                            <input type="csenha" name="csenha" value="" /><br><br>
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" name="telefone" value="" /><br><br>
                            <label for="empresa">Empresa:</label><br>
                            <select name="empresa">
                                <?php echo $empresas;?>
                            </select> <br><br>
                            <label for="setor">Setor:</label><br>
                            <select name="setor">
                                <?php 
                                    $setores = "<option value=''>-- Selecione um setor --</option>\n";
                                    $result = mysqli_query($link, "SELECT id_setores, nome FROM setores");
                                    while($row = mysqli_fetch_array($result)){
                                        $setores .= "\n<option value='". $row['id_setores'] ."'>". $row['nome'] ."</option>";
                                    }
                                    echo $setores;
                                ?>
                            </select> <br><br>
                            <input type="button" value="Cadastrar" class="btn btn-success"/>
                        </div>
                    </form>
                    
                    <form id="cad_externo" action="php/cadastrar_usuario.php?tipo=3" method="POST">
                        <h1>Usuário externo</h1>
                        <div class="cadastro-forms">
                            <label for="nome_completo">Nome completo:</label><br>
                            <input type="text" name="nome_completo" value="" /><br><br>
                            <label for="email">Email:</label><br>
                            <input type="text" name="email" value="" /><br><br>
                            <label for="senha">Senha:</label><br>
                            <input type="text" name="senha" value="" /><br><br>
                            <label for="senha">Confirme a senha:</label><br>
                            <input type="csenha" name="csenha" value="" /><br><br>
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" name="telefone" value="" /><br><br>
                            <label for="empresa">Empresa:</label><br>
                            <select name="empresa">
                                <?php echo $empresas;?>
                            </select> <br><br>
                            <label for="setor">Setor:</label><br>
                            <select name="setor">
                                <?php
                                    echo $setores;
                                ?>
                            </select> <br><br>
                            <input type="button" value="Cadastrar" class="btn btn-success"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
    <script>
        $(function(){
            var old = "cad_empresa";
            $('.table-select td').click(function(){
                var campo = $(this).attr("idform");
                $('#' + old).css("display", "none");
                $('#' + campo).css("display", "block");
                old = campo;
            });
            
            $(".btn-success").click(function(){
                var idform = $(this).parent().parent().attr("id")
                var form = $("#" + idform);
                var action = form.attr("action");
                var dados = form.serialize();
                
                var form = $('#cad_empresa').serialize();
                
                $.ajax({
                    url: action,
                    data: dados,
                    method: "post"
                }).done(function(data) {
                    if(data.indexOf("sucesso") > 0){
                        location = data;
                    }else{
                        showMsg(data, 5000);
                    }
                }).error(function(){
                    showMsg("Aconteceu um erro inesperado", 5000);
                });
            });
            <?php
                $msg = filter_input(INPUT_GET, "msg");
                $id = filter_input(INPUT_GET, "id");
                if(isset($msg)){
                    echo ("showMsg('$msg', 3000);");
                    echo ("
                        var campo = '$id'
                        $('#' + old).css('display', 'none');
                        $('#' + campo).css('display', 'block');
                        old = campo;
                        ");
                }
            ?>
        });
  
    </script>
</html>
