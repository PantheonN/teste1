<?php
$Valor=$_GET['id'];


include('functions/dbconnect.php');


$sql="SELECT * From farmacia WHERE ID=$Valor";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
	$id=$row[0];
    echo "ID: $row[0]<br> Nome: $row[1]<br>Descrição: $row[2]<br> Quantidade: $row[3]<br> farmaceutica: $row[4] <br> custo $row[5] <br>";
	echo "<br>";
    }
	echo "<a href='alterar.php?id=$id'>Alterar Dados?</a><br>";
	mysqli_free_result($result);
	}
mysqli_close($conn);




$sql="SELECT * From categoria1 WHERE ID=$Valor";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
	$id=$row[0];
    echo "ID: $row[0]<br> Nome: $row[1]<br>Descrição: $row[2]<br> Quantidade: $row[3]<br> farmaceutica: $row[4] <br> custo $row[5] <br>";
	echo "<br>";
    }
	echo "<a href='alterar.php?id=$id'>Alterar Dados?</a><br>";
	mysqli_free_result($result);
	}
mysqli_close($conn);




$sql="SELECT * From categoria2 WHERE ID=$Valor";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
	$id=$row[0];
    echo "ID: $row[0]<br> Nome: $row[1]<br>Descrição: $row[2]<br> Quantidade: $row[3]<br> farmaceutica: $row[4] <br> custo $row[5] <br>";
	echo "<br>";
    }
	echo "<a href='alterar.php?id=$id'>Alterar Dados?</a><br>";
	mysqli_free_result($result);
	}
mysqli_close($conn);

?>