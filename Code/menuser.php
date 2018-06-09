<?php

$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'pandadb');

    $id = $_POST['pid'];
    $qryfind="SELECT * FROM product WHERE product.pid=$id";
    $findres=mysqli_query($db,$qryfind);
    $findrow=mysqli_fetch_assoc($findres);
    $pid=$findrow[pid];
    $pname=$findrow[pname];
    $rate=$findrow[rate]; 
    $qrycheck="SELECT cart.pid FROM cart WHERE cart.pid=$pid";
    $checkres=mysqli_query($db,$qrycheck);
    if(mysqli_num_rows($checkres)>0)
    {
        $qryadd="UPDATE cart SET cart.qty=cart.qty+1, cart.amt=cart.amt+$rate WHERE cart.pid=$pid";
        mysqli_query($db,$qryadd);  
    }
    else
    {
        $qryinsert="INSERT INTO cart (cart.pid,cart.pname,cart.rate,cart.qty,cart.amt) VALUES ($pid,'$pname',$rate,1,$rate)";
        mysqli_query($db,$qryinsert); 
    }
    $qryupdate="UPDATE sales SET unit=unit+1 WHERE sales.pid=$id";
    mysqli_query($db,$qryupdate);

?>
