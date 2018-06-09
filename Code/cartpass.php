<?php
$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'pandadb');

    $qryempty="CALL dropcart()";  //Stored Procedure
    mysqli_query($db,$qryempty);
    header('location:checkout.php');
?>