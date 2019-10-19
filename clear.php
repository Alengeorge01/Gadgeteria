<?php   
require_once('connect.php');
session_start(); 
if(isset($_SESSION['login']) && $_SESSION['login'] == true){ 

	 $log = " DELETE FROM ".$_SESSION['uname']." ";
     $log1 = mysqli_query($link,$log);  
     header('location:cart.php');
 }

 else{
           header('location:login.php');
     }           
?>
