<?php
include_once('protect.php');
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista usuarios</title>
</head>
<body>
    <center>
    
    <h1>lista dos usuarios      </h1>
    <hr>
<table rules="all">

<thead>
<tr> 
<th> id </th>
<th> nome </th>
<th> email </th>
<th> senha </th>
<th> comando </th>
<th> comando </th>

</tr> 

</thead>
    <tbody>

<?php

// $sql_consulta=mysqli_query($ligar , "SELECT * FROM tabpessoas" );

$sql_code="SELECT * FROM tabpessoas";

$sql_query=$mysqli->query($sql_code) or die("falha na consulta: ". $mysqli->error);

$total=$sql_query->num_rows;

?>

<?php

//echo ($sql_query->fetch_array());
 

while($dados = $sql_query->fetch_assoc()) {
?>
<tr>
<td> <?= $dados['id']; ?> </td>
<td> <?= $dados['nome']; ?> </td>
<td> <?= $dados['email']; ?> </td>
<td> <?= $dados['senha']; ?> </td> 
<td> <a href="eliminar.php?codigo=<?=$dados['id']; ?>   "> Eliminar </a> </td>
<td> <a href="editar.php?codigo=<?=$dados['id']; ?>  "> Editar </a> </td>  
    </tr>

<?php } ?>

    <tr> <td colspan="6"> Total:     <?=$total ?>  <td>  </tr>

    </tbody>
   
</thead>

</table>
<a href="index.php"> Inicio  </a>
<br>
<tr> </tr> 
<a href="logout.php"> Logout  </a> 

</center>
</body>
</html>