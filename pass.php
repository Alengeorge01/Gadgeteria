<!DOCTYPE html>
                <html>
                <head>
                    <title>Password Change</title>
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
                    <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                          <img class="navhead" src="geek.webp" width="50" height="50">
                          <a class="navbar-brand" href="index.php">G@dgeteri@</a>
                        </div>
                        <center>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li><a href="mobile.php"><span class="glyphicon glyphicon-phone"></span>Smartphones</a></li>
                                    <li><a href="laptop.php"><i class="fas fa-laptop"></i> Laptops</a></li>
                                    <li><a href="watch.php"><i class="far fa-clock"></i> Watches</a></li>
                                    <li><a href="tv.php"><i class="fas fa-tv"></i> Televisions</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                      <?php
                                      session_start();
                                    $_SESSION['uname'];
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
                                    ?>
                                </ul>
                            </div>
                        </center>
                    </div>
                </nav>
           <div id="particles-js">
                <div  style="width: 40%; position: absolute; top:20vh; left: 30vw;">
          
          <form action="chpass.php" method="POST">
            <center><h2 class="h22">Password Change Form</h2></center><br>  
            <div class="form-group">
              <label for="Username"> Username </label>
              <input type="text" class="form-control" id="Username" placeholder="Username" name="uname2">
            </div>
            <div class="form-group">
              <label for="email"> Email Address </label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="email2">
            </div>
            <div class="form-group">
              <label  for="Password">New Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password" name="pass2">
            </div>
            <center><input type='submit' value=" Submit " class="btn btn-primary" id="bt"></center>
          </form>
        </div>
        </div>
                <script src="particles.js"></script>
                <script src="app.js"></script>
</body>
</html>