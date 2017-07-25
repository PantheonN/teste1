<?php
$condicao=$_GET["id"];
$nome=$_POST["nome"];
$desc=$_POST["desc"];
$quantidade=$_POST["quant"];
$farmaceutica=$_POST["farm"];
$custo=$_POST["custo"];








include('functions/dbconnect.php');


$sql = "UPDATE farmacia SET  nome = '$nome', descr = '$desc', quantidade = '$quantidade',farmaceutica = '$farmaceutica',custo = '$custo' WHERE id = $condicao";  //tudo o que tiver aqui tem que estar igual á base de dados
if (mysqli_query($conn,$sql)) {
    header("Location: alterar.php?id=$condicao");
} else {
	
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
mysqli_close($conn);
?>