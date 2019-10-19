<?php
	require_once('connect.php');
	$table=$_REQUEST['tablename'];	
	$name=$_REQUEST['name'];	
	$productid=$_REQUEST['productid'];	
	$image=$_REQUEST['image'];	
	$price=$_REQUEST['price'];	
	$si=$_REQUEST['size'];	
	$description=$_REQUEST['description'];	


	
	$query = "select * from $table where product_id='$productid'";
	$dup=mysqli_query($link,$query);
		if( mysqli_num_rows($dup)>=1)  { 
		    echo "<script> alert('Product ID already exists.');
                window.location='insert.php';
             </script>";  
		}  
	    else { 
            if($table=='mobile'){
		        $query = "insert into mobile values('$name','$si','$productid',$price,'$image','$description')";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='mobile.php';
                </script>";
            }
            else if($table=='laptop'){
		        $query = "insert into laptop values('$name','$si','$productid',$price,'$image','$description')";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='laptop.php';
                </script>";
            }
            else if($table=='watch'){
		        $query = "insert into watch values('$name','$si','$productid',$price,'$image','$description')";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='watch.php';
                </script>";
            }
            else if($table=='television'){
		        $query = "insert into television values('$name','$si','$productid',$price,'$image','$description')";
				$result = mysqli_query($link,$query);
                echo "<script>
                	window.location='tv.php';
                </script>";
            }
            else{
                echo "<script>
                        alert('No Table Exists');
                		window.location='insert.php';
                    </script>";
                }
            }
?>


