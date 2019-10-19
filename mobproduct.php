<?php
   session_start(); 
    if(isset($_SESSION['login']) && $_SESSION['login'] == true){ 
               echo "<!DOCTYPE html>
                <html>
                <head>
                    <title>Smartphones</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                    <link rel='stylesheet' type='text/css' href='main.css'>
                    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
                    <link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet'>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' type='text/javascript' async></script>
                    <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
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
            <div class='bg'>
				<div class='container'>
					    <div class='row'>
					        <div class='col-md-9' style='margin: 0 10%;'>
					            <div class='thumbnail'>";
										require_once('connect.php');
										$n1=$_REQUEST['n1'];
										$log = " select * from mobile where product_id ='$n1'";
										$log1 = mysqli_query($link,$log); 
									    if(mysqli_num_rows( $log1) > 0 ){
									        while($row = mysqli_fetch_array($log1)) {
									            echo "<img class='img-responsive' src='".$row['image']."'>";
								                echo "<div class='caption'>
								                    <h2 class='pull-right'>Rs. ".$row['price']."</h2>
                                                    <h2><a>".$row['mname']." - ".$row['product_id']."</a></h2><br>
                                                     <form action='mobcart.php?n1=".$row['product_id']."' method='POST'>
                                                        <h4>Quantity</h4>
                                                        <p><button class='btn btn-primary pull-right' style='float:left;'>Add to Cart</button></p>
                                                         <div class='quan'><select class='quan' name='quantity' required>
                                                             <option value='1' class='label1' selected>1</option>
                                                            <option value='2' class='label1'>2</option>
                                                            <option value='3' class='label1'>3</option>
                                                            <option value='4' class='label1'>4</option>
                                                             <option value='5' class='label1'>5</option>
                                                        </select></div>
                                                        
                                                    </form>
								                    <h4><br>Description :<br><br>".$row['description']."</h4>
								                </div>";
							              	}
						                }  			
					            echo "</div>
					        </div>
	    				</div>
	    			</div>	
	    		</div>	
    </body>
</html>";


           }
           else{
               header('location:login.php');
           }
?>


