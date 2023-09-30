<?php
//include('protect.php');
?>

<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>

<body>
    <center>
    <?php 
    

    if (isset($_SESSION)){ 
        echo "index.php okkkkkkk";
    }
    else
    {
        //var_dump(isset($_SESSION['idLog']));
        session_start();
    }
    if(isset($_SESSION['idLog'])){
        echo " <h1> Usuário Logado: ".$_SESSION['idLog']." </h1> ";
        //var_dump($_SESSION['idLog']);
    ?>
        <br> <a href="principal.php"> Acessar o sistema  </a>   <br>
        <a href="logout.php"> Logout  </a> 
    <?php
    }
    else
    {
    //var_dump($idLog);
    echo " <h1> sem usuário logado </h1> ";
    ?>
<h1>Bem vindo</h1>
       
       <hr>
       <H2>Login</H2>
       <hr>
       <form method="POST" action="login.php">
           <br>
           <br>
           Email:
           <input type="text" name="txtEmail" required > <br>
           <br>
           <br>
           <br>
           Senha:
           <input type="text" name="txtSenha" required> <br>
           <br>
           <br>

           <input type="submit" value="Entrar"> <br>
           <br>
           
           <a href="cadastroUsuario.html"> Cadastrar-se </a>


       </form>
       <tr> </tr> 



    <?php
    }
    ?>
  
    </center>
</body>

</html>