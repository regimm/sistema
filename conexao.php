<?php
$mysqli = new mysqli('localhost','root','','bancodados');
if($mysqli->error){
    die("falha ao conectar ao banco de dados".mysqli->error); 
}
?>