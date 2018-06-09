<?php
$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'pandadb');

$id = $_POST['pid'];
$qryremove="UPDATE cart SET qty=qty-1,amt=amt-rate WHERE cart.pid=$id";
mysqli_query($db,$qryremove);
$qrybackout="UPDATE sales SET unit=unit-1 WHERE sales.pid=$id";
mysqli_query($db,$qrybackout);
$qrydelete="DELETE FROM cart WHERE cart.qty=0";
mysqli_query($db,$qrydelete);
?>