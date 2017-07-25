<?php
$ID=$_GET['id'];
$conn=mysqli_connect("localhost","root","","base1");
if (mysqli_connect_errno())
  {
  echo "Erro ao Conectar: " . mysqli_connect_error();
  }
$sql="SELECT * From utilizador WHERE ID=$ID";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
		echo "Dados Actuais: <br>";
		echo "ID: $row[0]<br> Nome: $row[1]<br>Sobrenome: $row[2]<br> Data de Nascimento: $row[3]<br>";
		echo "<br>";
		$id=$row[0];
		$nome=$row[1];
		$sobre=$row[2];
		$data=$row[3];
    }
		mysqli_free_result($result);
	}
echo "	<form action='Alterar_bd.php?id1=$id' method='post'>
			<br>
			Nome:<br>
			<input type='text' name='nome' value='$nome'>
			<br>
			Sobrenome:<br>
			<input type='text' name='sobre' value='$sobre'>
			<br>
			Data de Nascimento:<br>
			<input type='text' name='data' value='$data'>
			<br>
			<br><br>
			<input type='submit' value='Submit'>
		</form> 
	";
mysqli_close($conn);
?>