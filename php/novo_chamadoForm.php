<?php
$idChamado = $_POST["idChamdo"];
$titulo = $_POST["titulo"];
$solicitante = $_POST["solicitante"];
$empresa = $_POST["empresa"];
$setor = $_POST["setor"];
$prioridade = $_POST["prioridade"];
$status = $_POST["status"];

$cliente = $_POST["cliente"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$descricao = $_POST["descricao"];



if(empty($titulo) OR !strstr($titulo,''))
{
    echo "Favor digitar o titulo!";
}

if(empty($cliente) OR !strstr($cliente,''))
{
    echo "Favor digitar o nome do cliente!";
}

if(empty($endereco) OR !strstr($endereco,''))
{
    echo "Favor digitar o endereço do cliente";
}


if(!is_numeric($numero) OR empty($numero))
{
    echo "Preencha corretamente o campo número.";
}


if(empty($cidade) OR !strstr($cidade,''))
{
    echo "Favor digitar a cidade do cliente";
}

if(empty($uf) OR !strstr($uf,''))
{
    echo "Favor digitar a cidade do cliente";
}

if(empty($tel) OR !strstr($tel,''))
{
    echo "Favor digitar a cidade do cliente";
}

if(empty($cel) OR !strstr($cel,''))
{
    echo "Favor digitar a cidade do cliente";
}

if(empty($descricao) OR !strstr($descricao,''))
{
    echo "Favor digitar a cidade do cliente";
}
?>