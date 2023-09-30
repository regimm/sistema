<?php
if (isset($_SESSION)){ 
    echo "protect.php okkkkkkk";
}
else
{
    session_start();
}

if(isset($_SESSION['idLog'])){
echo " Usuário Logado: ".$_SESSION['idLog'];
} 
else 
{
    header('Location: index.php');
    echo ("Você não pode acessar esta página 
    porque não está logado.");
    die();
}