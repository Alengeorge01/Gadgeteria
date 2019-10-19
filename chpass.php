<?php 
	require_once('connect.php');
    $name = $_REQUEST["uname2"]; 
	$newpwd = $_REQUEST["pass2"]; 
	$mail= $_REQUEST["email2"];
	 $enpwd =  sha1( $newpwd );
	 $query = "select * from register where username = '$name' and email='$mail'"; 
	 $result = mysqli_query( $link, $query) or die(mysql_error());
	 if(mysqli_num_rows($result) == 1){ 
	  	$update = " update register set password = '$enpwd' WHERE username = '$name'";
	  	mysqli_query( $link, $update ) or die(mysql_error()); 
        echo "
            <script>
                window.location='index.php';
                alert('Password has been updated successfully');
            </script>" ;
	}  
?>
