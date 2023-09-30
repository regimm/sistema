<?php
include('protect.php');
include_once('conexao.php');
$id=$_GET['codigo'];
$sql_eliminar=mysqli_query( $mysqli , "DELETE FROM tabpessoas where id='$id' ");

if($sql_eliminar==true){

    echo("Usuário excluído com sucesso");
    if($id==($_SESSION['idLog'])){
    include('logout.php');    
    }
    

    echo" <script>
    # window.location.href='index.html';
    </script>";
    }
    else
    {
        echo"Falha na exclusão";
    }
    
    
    ?>
    <br>
    
    <a href="listarusuarios.php"> inicio </a>




