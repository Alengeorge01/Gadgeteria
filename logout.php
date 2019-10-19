<?php
session_start();
	require_once('connect.php');
	if( isset($_SESSION['uname']) ){
		setcookie("username", $name , time()-700000, '/' , 'localhost');
    	session_destroy();    
		header("location:login.php");
		
	}
	else{
		header("location:login.php");
	}
?>	