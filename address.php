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
		
		
		.container1{
			
			
			
			top:2vh;
			
		}
		.container2{
		
			
			top:20vh;
		

			
		}

		#d1{
			
			padding-right: 30px;
		}


		.h21{
			
			padding-top: 2.5vw;
			color: red;
            font-size: 1.2em;
            font-weight: bold;
			font-family: Segoe UI Black;
			
		}

		.h22{
		
			padding-top: 1vw;
			font-weight: bold;
			font-family: Segoe UI Black;
			font-weight: bold;
			color:red;
		}

		.btn{
			
			margin-bottom: 5vw;
		}

		.black{
			
			color: #000;
			font-weight: bold;
			font-size: 15px;

		}
		
        .f4{
	     
	        border-color: #000;
	        width:100% ;
 	        height: 30px;
        }

		.btn-primary{
				
			font-size: 1em;
			font-weight: bold;
			width: 30%;
			margin-bottom: 25px;
				
		}

		.container3{	
			width: 40%;
		}

		@media(max-width: 960px){
		.btn-primary{
			width: 80%;
		}
		.container3{
			width: 80%;
		}
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
	
<div class='container container3'>
		 
    <form action='confirm.php' method='POST'>
		  	
		<div>
		    
		    <div class=' container1'>
		     
		    <h2 class='h22'>ADDRESS DETAILS</h2>
		    
		    <hr class='f4' '>
		    
		    <div class='form-group'>
		      
		        <label  for='firstname'>First Name:</label><br>
		   
		        <input type='text' class='form-control f4' id='fname' placeholder='First Name' name='fname' required><br>
		        <label for='lastname'>Last Name:</label><br>
		        <input type='text' class='form-control f4' id='uname' placeholder='Last Name' name='lname'>
		    </div>
		    
		    <div class='form-group'>
		        <label for='streetname'>Street Name:</label>
		        <input type='text' class='form-control f4' id='sname' placeholder='Street Name' name='sname' required>
		    </div>
		    
		    <div class='form-group'> 
		        <label for='address'>Address Line 2:</label>
		        <input type='text' class='form-control f4' id='address' placeholder='Address' name='address'>
		    </div>
		    
		    <div class='form-group'>
		        <label for='city'>City:</label><br>
		        <input type='text' class='form-control f4' id='city' placeholder='City' name='city' required><br>
		        <label for='start'>State:</label><br>
		        
		        <select name='state' class='form-control f4' required>
		      	<option value='Delhi'>Delhi</option>
		      	<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
		      	<option value='Andhra Pradesh'>Andhra Pradesh</option>
		      	<option value='Tamil Nadu'>Tamil Nadu</option>
		      	<option value='Madhya Pradesh'>Madhya Pradesh</option>
		      	<option value='Goa'>Goa</option>
		      	<option value='Gujarat'>Gujarat</option>
		      	<option value='Haryana'>Haryana</option>
		      	<option value='Jammu & Kashmir'>Jammu & Kashmir</option>
		      	<option value='Kerala'>Kerala</option>
		        </select>
		      
		    </div>

		    
		    <div class='form-group'>
		        <label for='zip'>Pin Code:</label><br>
		        <input type='text' class='form-control f4' id='zip' placeholder='Zip Code' name='zip' required><br>
		        <label for='phone'>Phone Number:</label><br>
		        <input type='Number' class='form-control f4' id='phone' placeholder='xxxxxxxxxx' name='phone' required>
		    </div>

		    <div class='form-group'>
		        <label for='email'>Email:</label>
		        <input type='email' class='form-control f4' id='email' placeholder='email' name='email'>
		    </div>

		    <div class='form-group'>
		        <label for='coupon'>Coupon Code:</label>
		        <input type='text' class='form-control f4' id='code' placeholder='code' name='code'>
		    </div><br><hr style='border-color: black;'><br>

        </div>
        </div>
        <div  class='form-group'>        
        <center><input type='submit' value='PROCEED' class='btn btn-primary' id='bt' success></center>
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
