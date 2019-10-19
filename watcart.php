<?php
require_once('connect.php');
session_start();
    $n1=$_REQUEST['n1'];
    $_SESSION['quan']=$_REQUEST['quantity'];
    $log = " select * from watch where product_id ='$n1'";
    $log1 = mysqli_query($link,$log); 
    if(mysqli_num_rows( $log1) > 0 ){
        while($row = mysqli_fetch_array($log1)) {
            $query1 = "INSERT INTO ".$_SESSION['uname']." values ('".$row['product_id']."','".$row['wname']."',".$row['price'].",".$_SESSION['quan'].")";
                $result1 = mysqli_query($link,$query1);
            header("location:watch.php");
    }   
    }        
    ?>