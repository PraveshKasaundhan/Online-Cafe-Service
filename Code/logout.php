<?php
$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'pandadb');

$qrydisp="SELECT * FROM cart";
$dispres = mysqli_query($db,$qrydisp);    
while($row = mysqli_fetch_array($dispres))
{
    $pid=$row['pid'];
    $qty=$row['qty'];
    $qrybackout="UPDATE sales SET unit=unit-$qty WHERE sales.pid=$pid";
    mysqli_query($db,$qrybackout);
}

    $qryempty="CALL dropcart()";  
    mysqli_query($db,$qryempty);
    header('location:index.php');
?>