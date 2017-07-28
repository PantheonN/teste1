<?php

include('functions/dbconnect.php');

echo "<p> Categorias:</p>";



echo "<h1>Farmacia</h1>";  //productos farmacia

    $sql="SELECT * From farmacia";

        if ($result=mysqli_query($conn,$sql))
        {
             while ($row=mysqli_fetch_row($result))
             {
                    echo "<a href='acao.php?id=$row[0]'>$row[1]</a><br>";
             }
            mysqli_free_result($result);
        }
    //mysqli_close($conn);

echo "<h1>Categoria1</h1>"; //productos categoria1

    $sql="SELECT * From categoria1";

        if ($result=mysqli_query($conn,$sql))
        {
             while ($row=mysqli_fetch_row($result))
             {
                    echo "<a href='acao.php?id=$row[0]'>$row[1]</a><br>";
             }
            mysqli_free_result($result);
        }
    //mysqli_close($conn);


echo "<h1>Categoria2</h1>"; //productos categoria2

    $sql="SELECT * From categoria2";

        if ($result=mysqli_query($conn,$sql))
        {
             while ($row=mysqli_fetch_row($result))
             {
                    echo "<a href='acao.php?id=$row[0]'>$row[1]</a><br>";
             }
            mysqli_free_result($result);
        }
    //mysqli_close($conn);





?>









