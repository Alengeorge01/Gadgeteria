<?php
session_start();
    $_SESSION['uname'];
if(isset($_SESSION['login']) && ($_SESSION['uname']=='Admin' || $_SESSION['uname']=='admin') && $_SESSION['login'] == true){   
 echo "
<!DOCTYPE html>
<html>
    <head>
        <title>G@dgeteri@</title>
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

        <header class='v-header cont' id='home'>
            <div class='video-wrap'>
                <video autoplay='true' loop='loop' muted='muted'>
                    <source src='aa.mkv' type='video/mp4'>  
                </video>
            </div>
            <div class='header-overlay'></div>
            <div class='header-content'>
                <h1 class='animated rubberBand'>G@dgeteri@</h1>
                <p class='animated bounceInUp'>~ A Place where humans meet future~ </p> 
            </div>
        </header>
            <nav class='navbar navbar-inverse navbar-fixed-top shrink'>
                <div class='container'>
                    <div class='navbar-header'>
                      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>                        
                      </button>
                      <img class='navhead' src='geek.webp' width='50' height='50'>
                      <a class='navbar-brand' href='adminmenu.php'>G@dgeteri@</a>
                    </div>
                    <center>
                        <div class='collapse navbar-collapse' id='myNavbar'>
                            <ul class='nav navbar-nav'>
                                <li><a href='#mobile'><span class='glyphicon glyphicon-phone'></span> Smartphones</a></li>
                                <li><a href='#laptop'><i class='fas fa-laptop'></i> Laptops</a></li>
                                <li><a href='#watch'><i class='far fa-clock'></i> Watches</a></li>
                                <li><a href='#tv'><i class='fas fa-tv'></i> Televisions</a></li>
                            </ul>
                            <ul class='nav navbar-nav'>
                                <li>";
                                    
                                    if(isset($_SESSION['uname'])){
                                        echo "<a href='pass.php'><span class='glyphicon glyphicon-user'></span>";
                                        echo $_SESSION['uname']; 
                                        echo "</a></li>
                                        <li><a href='insert.php'><span class='glyphicon glyphicon-plus-sign'></span> Insert </a></li>
                                        <li><a href='delete.php'><span class='glyphicon glyphicon-minus-sign'></span> Delete </a></li>
                                        <li><a href='edit.php'><span class='glyphicon glyphicon-edit'></span> Edit </a></li>
                                        <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout </a></li>";
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
            <br>
            <div class='container'> 
                <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#myCarousel' data-slide-to='1'></li>
                        <li data-target='#myCarousel' data-slide-to='2'></li>
                        <li data-target='#myCarousel' data-slide-to='3'></li>
                    </ol>

                    <div class='carousel-inner'>
                        <div class='item active'>
                            <img src='sony.jpg' alt='Sony Bravia OLED TV'>
                            <div class='carousel-caption'>
                                <h2>Sony Bravia 4K TV</h2>
                                <p>Discover a world of seamless usability through the Sony Bravia 4K Ultra HD TVs, movies and music with seamless usability through Sony's Android TV.</p>
                            </div>
                        </div>
                        <div class='item '>
                            <img src='apple.png' alt='Apple Macbook'>
                            <div class='carousel-caption'>
                                <h2>Apple Macbook Pro</h2>
                                <p>The ultimate pro notebook, MacBook Pro features faster processors, upgraded memory, the Apple T2 chip, and a Retina display with True Tone technology.</p>
                            </div>
                        </div>

                        <div class='item'>
                            <img src='one.jpg' alt='One Plus 6'>
                            <div class='carousel-caption'>
                                <h2>One Plus 6</h2>
                                <p>Fast and Smooth, Get the The Speed You Need with OnePlus 6 - Snapdragon™ 845, 6.28 Inch Display Optic AMOLED, 16+20 MP Dual camera, Up to 8GB Ram.</p>
                            </div>
                        </div>
                    
                        <div class='item'>
                            <img src='watch.jpg' alt='Apple iWatch Series 4'>
                            <div class='carousel-caption'>
                                <h2>Apple iWatch Series 4</h2>
                                <p>Apple Watch Series 4 features its largest display yet, a re-engineered digital crown and cellular to make calls.</p>
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
            <br>
            <div class='periscope'>
                <div class='container-fluid'>
                    <section id='mobile'>
                        <div class='row'>
                            <a href='mobile.php'><img src='mobile.jpg' class='mob'></a>
                            <div class='mob1'>
                                <h1>Smartphones</h1>
                                <p>Looking for a feature-rich smartphone with top-of-the-line specifications at a great price? Shop online at Gadgeteria from a great range of smartphones from Samsung,Apple ,Xiaomi, Honor...</p>
                            </div>
                        </div>
                    </section>
                    <section id='laptop'>
                        <div class='row'>
                            <a href='laptop.php'><img src='lap.jpg' class='lap'></a>
                            <div class='mob1'>
                                <h1>Laptops</h1>
                                <p>Discover the best Laptop, Desktops in Best Sellers. Check out the wide assortment of top class laptops available on Gadgeteria...</p>
                            </div>
                        </div>
                    </section>
                    <section id='watch'>
                        <div class='row'>
                            <a href='watch.php'><img src='watches.jpg' class='mob'></a>
                            <div class='mob1'>
                                <h1>Watches</h1>
                                <p>Shop watches for men, women, and kids from leading brands like Fastrack, Titan, Casio, Timex, Fossil and more. Also, explore our special collections for smartwatches, couple watches and premium watches...</p>
                            </div>
                        </div>
                    </section>
                    <section id='tv'>
                        <div class='row'>
                            <a href='tv.php'><img src='tv.jpg' class='lap'></a>
                            <div class='mob1'>
                                <h1>Smart Televisions</h1>
                                <p>Smart TVs combine internet connectivity with traditional TVs, opening up a whole new world of possibilities like watching online videos on your TV, streaming etc...</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <script type='text/javascript' src='nav.js'></script>
    </body>
</html>";
    }

else{
    header("location:admin.php");
}
?>