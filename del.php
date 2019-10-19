<?php
	require_once('connect.php');
	$table=$_REQUEST['tablename'];	
	$productid=$_REQUEST['productid'];	
	


	
	$query1 = "select * from $table where product_id='$productid'";
	$dup1=mysqli_query($link,$query1);
		if( mysqli_num_rows($dup1)==0)  { 
		    echo "<script> 
                alert('Product ID doesnt exists');
                window.location='delete.php';
                </script>";  
		}  
	    else { 
            if($table=='mobile'){
		        $query = " delete from $table where product_id='$productid'";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='mobile.php';
                </script>";
            }
            else if($table=='laptop'){
		        $query = " delete from $table where product_id='$productid'";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='laptop.php';
                </script>";
            }
            else if($table=='watch'){
		        $query = " delete from $table where product_id='$productid'";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='watch.php';
                </script>";
            }
            else if($table=='television'){
		        $query = " delete from $table where product_id='$productid'";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='tv.php';
                </script>";
            }
            else{
                echo "<script>
                        alert('No Table Exists');
                		window.location='delete.php';
                    </script>";
                }
            }
?>


