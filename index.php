<!DOCTYPE html >
<html>
    <?php include('php/head.php');?>

    <body>
        <div style="height: 100vh; margin-right: 0px;" class="row">
            <div class="col-md-6">
                <div style="width: 200px; height: 200px; margin: 200px auto;">
                    <img style="width: 200px; margin: 0 auto;" src="img/logoTop.png">
                </div>
                <table style="position: absolute; bottom: 0; width: calc(100% - 15px);">
                    <tr>
                        <th style="text-align: center; width: 50%;">Sobre</th>
                        <th style="text-align: center; width: 50%;">Termos de uso</th>
                    </tr>
                </table>
            </div>
            
            <div class="col-md-6" style="background-color: #f0932b;">
                <form action="php/login.php" method="POST">
                    <table class="logar">	
                        <tr>
                            <td>Login: &nbsp;</td>
                            <td><input type="text" name="login"></td>
                        </tr>
                        <tr>
                            <td>Senha: &nbsp; </td>
                            <td><input type="password" name="senha" id="senha"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><center><button type="submit" name="logar">Login</button></center></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
<!--        <img src="img/logoTop.png">
        <div class="logar">
            <form action="php/login.php" method="POST">
                <table class="logar">	
                    <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" id="senha"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="botao" type="submit" name="logar">Login</button></td>
                    </tr>
                </table>
            </form>
        </div>

        <div id="tela"></div>
        <div id="texto">
            <a target="_blank" href="">Sobre &emsp;</a>
            <a target="_blank" href="">Termos de uso </a>				
        </div>-->
    </body>
    <?php
        $msg = filter_input(INPUT_GET, "msg");
        if(isset($msg)){
            echo ("
                <script type='text/javascript'>
                    showMsg('$msg', 3000);
                        console.log('teste');
                </script>
                ");
        }
    ?>
</html>

