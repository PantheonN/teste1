

<?php
include('functions/dbconnect.php');


$sql="SELECT * From farmacia";

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