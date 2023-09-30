
<?php

require_once('conexao.php');

$nome=$_POST['txtNome'];

$email=$_POST['txtEmail'];

$senha=$_POST['txtSenha'];

echo $nome;

echo $email;

echo $senha;

$sqlCadastro=mysqli_query($mysqli," INSERT INTO tabpessoas (nome,email,senha) values ('$nome','$email','$senha') " );

if ($sqlCadastro==true)
{

    echo("Usuário cadastrado com sucesso");
    
echo" <script>
# window.location.href='index.php';
</script>";
}
else
{
    echo"Falha no cadastro".$sqlCadastro."<br>".mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
<br>

<a href="index.php"> Tela Inicial </a>