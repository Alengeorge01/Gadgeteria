  <?php 
		
		require_once('connect.php');

		$name= $_REQUEST['uname'];
		$emad= $_REQUEST['ead'];
		$pass= $_REQUEST['pass'];
		$repass= $_REQUEST['repass'];
		$encp =  sha1($pass); 
		$encrep =  sha1($repass); 


		$dup = "select * from register where username ='$name'";
		$dup1 = mysqli_query($link,$dup); 

		if( mysqli_num_rows($dup1) >=1)  { 
		    echo "<script> alert('User name is already exists.');
                window.location='signup.php';
             </script>";  

		}  
	    else { 
            if($encp==$encrep){
		        $query = "insert into register values ('$name','$encp','$emad')";
				$result = mysqli_query($link,$query);
                echo "<script>
                    window.location='login.php';
                </script>";
            }
            else{
                echo "<script>
                        alert('Password not match');
                        window.location='signup.php';
                    </script>";
                }
            }
		?>
