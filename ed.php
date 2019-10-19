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
		if( mysqli_num_rows($dup)==0)  { 
		    echo "<script> alert('Product ID doesnt exist.');
                window.location='edit.php';
             </script>";  
		}  
	    else { 
            if($table=='mobile'){
		        $query1 = "update mobile set mname='$name' where product_id='$productid' ";
                $query2 = "update mobile set image='$image' where product_id='$productid' ";
                $query3 = "update mobile set size='$si' where product_id='$productid' ";
                $query4 = "update mobile set description='$description' where product_id='$productid' ";
                $query5 = "update mobile set price=$price where product_id='$productid' ";
				$result1 = mysqli_query($link,$query1);
                $result2 = mysqli_query($link,$query2);
                $result3 = mysqli_query($link,$query3);
                $result4 = mysqli_query($link,$query4);
                $result5 = mysqli_query($link,$query5);
                echo "<script>
                	window.location='mobile.php';
                </script>";
            }
            else if($table=='laptop'){
		        $query1 = "update mobile set lname='$name' where product_id='$productid' ";
                $query2 = "update mobile set image='$image' where product_id='$productid' ";
                $query3 = "update mobile set size='$si' where product_id='$productid' ";
                $query4 = "update mobile set description='$description' where product_id='$productid' ";
                $query5 = "update mobile set price=$price where product_id='$productid' ";
                $result1 = mysqli_query($link,$query1);
                $result2 = mysqli_query($link,$query2);
                $result3 = mysqli_query($link,$query3);
                $result4 = mysqli_query($link,$query4);
                $result5 = mysqli_query($link,$query5);
                echo "<script>
                    window.location='laptop.php';
                </script>";
            }
            else if($table=='watch'){
		        $query1 = "update mobile set wname='$name' where product_id='$productid' ";
                $query2 = "update mobile set image='$image' where product_id='$productid' ";
                $query3 = "update mobile set size='$si' where product_id='$productid' ";
                $query4 = "update mobile set description='$description' where product_id='$productid' ";
                $query5 = "update mobile set price=$price where product_id='$productid' ";
                $result1 = mysqli_query($link,$query1);
                $result2 = mysqli_query($link,$query2);
                $result3 = mysqli_query($link,$query3);
                $result4 = mysqli_query($link,$query4);
                $result5 = mysqli_query($link,$query5);
                echo "<script>
                    window.location='watch.php';
                </script>";
            }
            else if($table=='television'){
		        $query1 = "update mobile set tname='$name' where product_id='$productid' ";
                $query2 = "update mobile set image='$image' where product_id='$productid' ";
                $query3 = "update mobile set size='$si' where product_id='$productid' ";
                $query4 = "update mobile set description='$description' where product_id='$productid' ";
                $query5 = "update mobile set price=$price where product_id='$productid' ";
                $result1 = mysqli_query($link,$query1);
                $result2 = mysqli_query($link,$query2);
                $result3 = mysqli_query($link,$query3);
                $result4 = mysqli_query($link,$query4);
                $result5 = mysqli_query($link,$query5);
                echo "<script>
                    window.location='tv.php';
                </script>";
            }
            else{
                echo "<script>
                        alert('No Table Exists');
                		window.location='edit.php';
                    </script>";
                }
            }
?>


