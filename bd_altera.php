<?php
$condicao=$_GET["id1"];
$nome=$_POST["nome"];
$sobrenome=$_POST["sobre"];
$data=$_POST["data"];
$conn=mysqli_connect("localhost","root","","base1");
if (mysqli_connect_errno())
  {
  echo "Erro ao Conectar: " . mysqli_connect_error();
  }
$sql = "UPDATE utilizador SET  Nome = '$nome', sobrenome = '$sobrenome', data_nasc = '$data' WHERE ID = $cond";
if (mysqli_query($conn,$sql)) {
    echo "Actualizado com sucesso!";
} else {
	
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
mysqli_close($conn);
?>