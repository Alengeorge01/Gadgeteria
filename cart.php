<?php   
session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] == true){ 

echo "  
	<!DOCTYPE html>
	<html>
	<head>
	<title>CART</title>
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
        background-color: #232323;
        color:white;
	    }
		
		.c1{
			margin-top: 20px;
			text-align: center;
			font-size: 1.2em;
		}
		
		.c2{
			width:20%;
			height: 5vh;
			font-size: 1.2em;
			background-color: green;
		}
		.d{
			width: 50%;
			 position: absolute;
			  top:20vh; 
			  left: 25vw;
		}

		th,td{
			padding: 2vh 5vw;
		}

		@media(max-width: 960px){
		.btn-success,btn-danger{
			width: 80%;
			text-align:center;
			position:absolute;
			left:20vh;

		}
		.d{
			width: 30%;
			 position: absolute;
			  top:10vh; 
			  left: 15vw;
		}
		th,td{
			padding: 1vh 2vw;
		}
		}

		

	</style>
</head>
<body data-spy='scroll' data-target='.navbar' data-offset='50'>
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
	<div id='particles-js'>
        <div class='d'>
	<form action='address.php'>
<center>
<table class='c1' cellpadding='20px' border='2'>
		      	

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
					$log_ = ' select name from '.$_SESSION['uname'].' ';
					$log_1 = mysqli_query($link,$log_);
		      		$log = ' select * from '.$_SESSION['uname'].' ';
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
		      	echo"
		    </td>
		      		
		    <td>";
		    ?>

		      	<?php
		      				
		      	    $sum=0;
                    $log = ' select * from '.$_SESSION['uname'].' ';
		      	    $log1 = mysqli_query($link,$log); 
                    if(mysqli_num_rows( $log1) > 0 ){
                    while($row = mysqli_fetch_array($log1)) {
        	        $amt=$row['price']*$row['quantity'];
                    echo "Rs.".$amt."<hr class='f4'><br>" ;
                    $sum=$sum+$amt;
		      				
                    }}
		      			
		      	
		      			
		 echo "     			
		    </td>
		      		
        </tr>

		<tr>
		    <td>";
		    ?>
		      	<?php

		      	    echo "Order Total

		    
		    </td>
		      		
		    <td>";
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
		      


		<center><button class='btn btn-success'>Proceed</button> <a href='clear.php' class='btn btn-danger'>Clear Cart</a></center>
		    
		    
	</form>
	</div>
	</div>
                <script src='particles.js'></script>
                <script src='app.js'></script>
	
</body>
  
</html>";
  }
    else{
           header('location:login.php');
       }
           
?>
