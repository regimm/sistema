<?php
session_start();
//include('protect.php');
//echo $_SESSION['idLog']; 

include('conexao.php');
$email=$_POST['txtEmail'];
$senha=$_POST['txtSenha'];

$sql_logar=mysqli_query($mysqli , "SELECT * FROM tabpessoas 
WHERE email='$email' and senha='$senha' " );
if (mysqli_num_rows($sql_logar)!=0){
// var_dump($sql_logar);
 echo mysqli_num_rows($sql_logar);

$dados = $sql_logar->fetch_assoc();
echo $dados['id'];
$_SESSION['idLog'] = $dados['id'];

header ('Location: principal.php');
?>
    <tr>
    <td> <?= $dados['id']; ?> </td>
    <td> <?= $dados['nome']; ?> </td>
    <td> <?= $dados['email']; ?> </td>
    <td> <?= $dados['senha']; ?> </td> 
    </tr>
    <center>
    <a href="principal.php"> Usuário Logado </a>  </a> 
    </center>

<?php
}
else 
{
?>
   <center>
   <a href="index.php"> Usuário não encontrado </a>  </a> 
   </center>
<?php 
}
?>
<br>
