<?php
$conn=mysqli_connect("localhost","root","","base1");
if (mysqli_connect_errno())
  {
  echo "Erro ao Conectar: " . mysqli_connect_error();
  }
$sql="SELECT * From utilizador";

if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
		echo "<a href='acao.php?id=$row[0]'>$row[1]</a><br>";
    }
  mysqli_free_result($result);
}
mysqli_close($conn);
?>
