<?php   
session_start(); 
if(isset($_SESSION['login']) && $_SESSION['login'] == true){ 

echo "  

<!DOCTYPE html>

<html>
<head>
	<title>ADDRESS</title>
	<meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='main.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
        <link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' type='text/javascript' async></script>
        <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

	<style type='text/css'>

	*{
			margin: 0px;
			padding: 0px;

		}

	body{
		
		background-color: rgb(0,242,191);	
	}
		
	td{
		font-size: 1.2em;
		padding: 10px;
		text-align: center;
	}
		
	.f4{
			
		border-color:black;
	
	}
		
	
	</style>
</head>

<body data-spy='scroll' data-target='.navbar' data-offset='50'>
                    <nav class='navbar navbar-inverse navbar-fixed-top'>
                            <div class='container'>
                                <div class='navbar-header'>
                                  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>                        
                                  </button>
                                  <img class='navhead' src='geek.webp' width='50' height='50'>
                                  <a class='navbar-brand' href='index.php'>G@dgeteri@</a>
                                </div>
                                <center>
                                    <div class='collapse navbar-collapse' id='myNavbar'>
                                        <ul class='nav navbar-nav'>
                                            <li><a href='mobile.php'><span class='glyphicon glyphicon-phone'></span>Smartphones</a></li>
                                            <li><a href='laptop.php'><i class='fas fa-laptop'></i> Laptops</a></li>
                                            <li><a href='watch.php'><i class='far fa-clock'></i> Watches</a></li>
                                            <li><a href='tv.php'><i class='fas fa-tv'></i> Televisions</a></li>
                                        </ul>
                                        <ul class='nav navbar-nav navbar-right'>
                                <li>";
                                    
                                    if(isset($_SESSION['uname'])){
                                        echo "<a href='pass.php'><span class='glyphicon glyphicon-user'></span>";
                                        echo $_SESSION['uname']; 
                                        echo "</a></li>
                                        <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>
                                        <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
                                    }
                                     else{
                                        echo "<a href='signup.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>
                                        <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>";
                                        echo "Login";
                                        echo "</li>";
                                    } 
                            echo "        
                            </ul>
                                    </div>
                                </center>
                            </div>
                        </nav>
	
			<br><br><br>
	<div id='d1'>";

	?>
			
			<?php
		        $firstname=$_REQUEST['fname'];
		        $lastname=$_REQUEST['lname'];
		        $street=$_REQUEST['sname'];
		        $address=$_REQUEST['address'];
		        $city=$_REQUEST['city'];
		        $state=$_REQUEST['state'];
		        $zip=$_REQUEST['zip'];
		        $phone=$_REQUEST['phone'];
		        $email=$_REQUEST['email'];
		        $coupon=$_REQUEST['code'];


echo "
	</div>
		
	<div class='container'>
		  
		<center><h2 class=' bg-success bold'>Order Summary</h2></center>
		  
		  <form action='thank.php' method='POST'>
		    
		        <div class='form-group'>
		        <center><h4><span class='black1'>Please Take a moment to review your Order.</span></h4></cente><br>

		  <table >
		      	

                <tr>
		      		
		      		<td><h5><label for='username'><span class='black1'>Name: </label></h5></td>
		      		<td>
		      			<span class='black'>";
		      			?>
		      				<?php

		      					echo $firstname." ".$lastname;
		      				echo "
		      			</span>
		      		</td>
		      	</tr>


		      	<tr>
		      		<td><h5><label for='username'><span class='black1'>Address: </label></h5></td>
		      		<td>
		      			<span class='black'>";
		      			?>
		      				
		      				<?php

		      					echo $street."<br>".$address." ".$city." ".$state;

		      				echo "
		      			</span>
		      		</td>
		      	</tr>


		      	<tr>
		      		<td><h5><label for='username'><span class='black1'>Zip Code: </label></h5></td>
		      		<td>
		      			<span class='black'>";
		      			?>
		      				<?php

		      					echo $zip;
		      			echo "
		      			</span>
		      		</td>
		      	</tr>

		      	<tr>
		      		<td><h5><label for='username'><span class='black1'>Phone Number : </label></h5></td>
		      		<td>
		      			<span class='black'>";
		      			?>
		      				<?php
		      					echo " ".$phone;
		      	echo "
		      			</span>
		      		</td>
		      	</tr>

		      	<tr>
		      		<td><h5><label for='username'><span class='black1'>Email Id: </label></h5></td>
		      		<td>
		      			<span class='black'>";
		      			?>
		      				<?php

		      					echo $email;
		      			echo "
		      			</span>
		      		</td>
		      	</tr>

		      </table><br><br><br>


		      <center><table  border='2' cellpadding='20px'>
		      	<tr>
		      	    <td>PRODUCT NAME</td>
		      	    <td>QUANTITY</td>

		      	    <td class='black1'>PRICE</td>

		      	</tr>

		      	<tr>
		      		<td>";
		      		?>
		      			<?php
                            require_once('connect.php');
		      				$log = 'select * from '.$_SESSION['uname'].' ';
		      				$log1 = mysqli_query($link,$log); 
                            if(mysqli_num_rows( $log1) > 0 ){
                            while($row = mysqli_fetch_array($log1)) {
                            echo $row['product_id']." - ".$row['name']."<hr class='f4'><br>";
                            }}
		      			
		      	echo "
		      		
		      		</td>
		      		
		      		<td>";
		      		?>

		      			<?php
                         
		      				$log = ' select * from '.$_SESSION['uname'].' ';
		      				$log1 = mysqli_query($link,$log); 
                            if(mysqli_num_rows( $log1) > 0 ){
                            while($row = mysqli_fetch_array($log1)) {
                            echo $row['quantity']."<hr class='f4'><br>" ;
                            }}
		      		echo "
		      			
		      		</td>

		      		<td>
		      		";
		      		?>
		      			<?php
		      				$sum=0;
                            $log = 'select * from '.$_SESSION['uname'].' ';
		      				$log1 = mysqli_query($link,$log); 
                            if(mysqli_num_rows( $log1) > 0 ){
                            while($row = mysqli_fetch_array($log1)) {
        	                $amt=$row['price']*$row['quantity'];
                            echo "Rs.".$amt."<hr class='f4'><br>";
                            $sum=$sum+$amt;
		      				
                            }}
		      			echo "
		      			
		      		</td>
		      		
                </tr>

		      	<tr>
		      		<td>";
		      		?>
		      			<?php

		      				echo 'Order Total';

		      		echo "
		      		</td>
		      		
		      		<td>
		      		";
		      		?>

		      			<?php

		      				echo "     ";

		      		echo "
		      			
		      		</td>
		      		
		      		<td>";
		      		?>

		      			<?php

		      				echo "Rs.". $sum ;

		      		
		      	echo "
		      		</td>

		      		

		      	</tr>


		      </table><br><br>
		      
			<center><input type='submit' class='btn btn-success' value='PROCEED'></center>
		    
		    </div>

		</form>
    </div>
	
</body>
</html>";

  }
    else{
           header('location:login.php');
       }
           
?>
