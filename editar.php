<?php
include_once('protect.php');
include_once('conexao.php');
$id=$_GET['codigo'];
$sql_consulta=mysqli_query($mysqli , " SELECT * FROM tabpessoas WHERE id='$id' " );
$dados=mysqli_fetch_array($sql_consulta);

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edição</title>
</head>

<body>
    <center>
    <h1>edição</h1>
    <hr>
<H2>edição dos dados </H2>
<hr>

<form  method="POST" action="atualizar.php">
<input type="hidden" name="codigo" value='<?= $dados[0] ?>' > 
Nome: <br>
<input type="text" name="txtNome" value='<?= $dados[1] ?>' > <br>
Email:  <br>
<input type="text" name="txtEmail" value='<?= $dados[2] ?>' > <br>
Senha:  <br>
<input type="text" name="txtSenha" value='<?= $dados[3] ?>' > <br>
<br>
<input type="submit" value="Atualizar"> <br>
<br>
<a href="listarusuarios.php"> Logar </a>
</form>
</center>
</body>
</html>