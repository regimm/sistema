<?php
require_once('conexao.php');

$id = $_POST['codigo'];
$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];
echo $id;

$sql_ATUALIZAR=mysqli_query( $mysqli , " UPDATE tabpessoas SET nome='$nome', email='$email', senha='$senha' WHERE id='$id' " );
if ($sql_ATUALIZAR==true){
    echo("Usuário ATUALIZADO com sucesso"); 
}

else {
    echo("Falha na edição");
}


?>
<br>

<a href="listarusuarios.php"> tela de Edição </a>