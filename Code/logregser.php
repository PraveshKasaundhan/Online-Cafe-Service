<?php

$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'pandadb');

$errors=array();

if(isset($_POST['login']))
{
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    if(empty($userid))
    {
        array_push($errors,"Enter UserID");
    }
    if(empty($password))
    {
        array_push($errors,"Enter Password");
    }
    if(count($errors)== 0)
    {
        $qrylog="SELECT * FROM customer WHERE customer.userid='$userid' AND customer.password='$password'";
        $result=mysqli_query($db,$qrylog);
        if(mysqli_num_rows($result) == 1)
        { 
            header('location:home.php');
        }
        else
        {
            array_push($errors,"Invalid Entries");
        }
    }
}

if(isset($_POST['register']))
{
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $qryexist="SELECT * FROM customer WHERE customer.userid='$userid'";
    $result=mysqli_query($db,$qryexist);
    if(mysqli_num_rows($result) > 0)
    { 
        array_push($errors,"UserID is already Used");
    }
    if(empty($userid))
    {
        array_push($errors,"Enter UserID");
    }
    if(empty($name))
    {
        array_push($errors,"Enter Name");
    }
    if(empty($password))
    {
        array_push($errors,"Enter Password");
    }
    if(empty($repassword))
    {
        array_push($errors,"Enter RePassword");
    }
    if($password!=$repassword)
    {
        array_push($errors,"Password do not Match");
    }
    
    if(count($errors)== 0)
    {
        $qryreg="INSERT INTO customer (customer.userid,customer.name,customer.password) VALUES ('$userid','$name','$password')";
        mysqli_query($db,$qryreg);
        header('location:index.php');
    }
}

?>