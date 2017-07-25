<?php
$Valor=$_GET['id'];


include('functions/dbconnect.php');


$sql="SELECT * From farmacia WHERE ID=$Valor";
if ($result=mysqli_query($conection,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
	$id=$row[0];
    echo "ID: $row[0]<br> Nome: $row[1]<br>Sobrenome: $row[2]<br> Data de Nascimento: $row[3]<br>";
	echo "<br>";
    }
	echo "<a href='alterar.php?id=$id'>Alterar Dados?</a><br>";
	mysqli_free_result($result);
	}
mysqli_close($conection);
?>