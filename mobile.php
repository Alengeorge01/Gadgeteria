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
                    <link rel='stylesheet' type='text/css' href='animate.css'>
                    <link rel='stylesheet' type='text/css' href='main.css'>
                    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
                    <link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet'>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' type='text/javascript' async></script>
                    <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
                </head>
                <body data-spy='scroll' data-target='.navbar' data-offset='50'>
                    <nav class='navbar navbar-inverse navbar-fixed-top shrink'>
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

                        <div class='container-fluid'> 
                            <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                                <ol class='carousel-indicators'>
                                    <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                    <li data-target='#myCarousel' data-slide-to='1'></li>
                                    <li data-target='#myCarousel' data-slide-to='2'></li>
                                </ol>

                                <div class='carousel-inner'>
                                    <div class='item active'>
                                        <img src='mob1.jpg' alt='Iphone XS Max'>
                                        <div class='carousel-caption'>
                                            <h2 class='animated bounceInDown'>Iphone XS Max</h2>
                                            <p class='animated bounceInDown'>Buy iPhone XS and iPhone XS Max in Gold, Space Gray, or Silver. With advanced Face ID, A12 Bionic chip, and Super Retina display.</p>
                                        </div>
                                    </div>
                                    <div class='item'>
                                        <img src='mob2.jpg' alt='Samsung S9 Plus'>
                                        <div class='carousel-caption'>
                                            <h2 class='animated rotateInDownLeft'>Samsung S9 Plus</h2>
                                            <p class='animated rotateInDownLeft'>Explore the specifications to find out what makes Galaxy S9 and S9+ work. ... sound with Dolby Atmos technology</p>
                                        </div>
                                    </div>
                                    <div class='item'>
                                        <img src='one.jpg' alt='One Plus 6'>
                                        <div class='carousel-caption'>
                                            <h2 class='animated flipInY'>One Plus 6</h2>
                                            <p class='animated flipInY'>Fast and Smooth, Get the The Speed You Need with OnePlus 6 - Snapdragon™ 845, 6.28 Inch Display Optic AMOLED, 16+20 MP Dual camera, Up to 8GB Ram.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                    <span class='sr-only'>Previous</span>
                                </a>
                                <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                    <span class='sr-only'>Next</span>
                                </a>
                            </div>
                        </div>
                        <div class='periscope'>
                            <div class='container-fluid'>";
                               
                                    require_once('connect.php');
                                    $query1= 'select * from mobile';          
                                    $result1 = mysqli_query($link,$query1);
                                    echo "<br><div class='row text-center' style='display:flex ; flex-wrap:wrap'>";
                                    if(mysqli_num_rows( $result1) > 0 ){                                    
                                        while($row = mysqli_fetch_array($result1)) {
                                            echo "<div class='col-lg-4 col-sm-6'>";
                                            echo "<div class='thumbnail'>";
                                            echo "<img src=".$row['image'].">";
                                            echo "<div class='caption'>";
                                            echo "<h4>".$row['mname']." - ".$row['product_id']."</h4>";
                                            echo "</div><p><a href='mobproduct.php?n1=".$row['product_id']."' class='btn btn-primary'>More Info</a></p></div></div>";
                                        }
                                    }  
                                    echo "</div>                                  
                            </div>
                        </div>
                        <script type='text/javascript' src='nav.js'></script>
                </body>
            </html>";


           }
           else{
               header('location:login.php');
           }


?>

