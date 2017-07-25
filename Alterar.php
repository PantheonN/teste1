<?php
$ID=$_GET['id'];


include('functions/dbconnect.php');


$sql="SELECT * From farmacia WHERE ID=$ID";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {

		$id=$row[0];
		$nome=$row[1];
		$desc=$row[2];
		$quantidade=$row[3];
		$farmaceutica=$row[4];
		$custo=$row[5];

		echo "Dados Actuais: <br>";
		echo "Nome: $nome <br> Descrição: $desc <br>  Quantidade: $quantidade<br>Farmaceutica: $farmaceutica<br> Custo: $custo<br>";
		echo "<br>";
	
    }
		mysqli_free_result($result);
	}
echo "	<form action='Alterar_bd.php?id=$id' method='post'>
			<br>
			Nome:<br>
			<input type='text' name='nome' value='$nome'>
			<br>
			Descrição:<br>
			<textarea type='text' name='desc' >$desc </textarea>
			<br>
			Quantidade:<br>
			<input type='text' name='quant' value='$quantidade'>
			<br>
			Farmaceutica:<br>
			<input type='text' name='farm' value='$farmaceutica'>
			<br>
			Custo:<br>
			<input type='number' name='custo' value='$custo'>
			<br>
			<br><br>
			<input type='submit' value='Submit'>
		</form> 
	";
mysqli_close($conn);
?>