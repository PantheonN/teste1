<?php
$condicao=$_GET["id1"];
$nome=$_POST["nome"];
$sobrenome=$_POST["sobre"];
$data=$_POST["data"];


include('functions/dbconnect.php');


$sql = "UPDATE utilizador SET  Nome = '$nome', sobrenome = '$sobrenome', data_nasc = '$data' WHERE ID = $condicao";
if (mysqli_query($conn,$sql)) {
    echo "Actualizado com sucesso!";
} else {
	
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
mysqli_close($conn);
?>