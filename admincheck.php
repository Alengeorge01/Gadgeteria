        
<?php 
session_start();
require_once('connect.php');
        
 $name2= $_REQUEST['uname1'];
$pass2= $_REQUEST['pass1'];


$name1 = stripslashes($name2);
$pass1= stripslashes($pass2);

$name = mysqli_real_escape_string($link,$name1);
$pass = mysqli_real_escape_string($link,$pass1);
$encp =  sha1($pass); 


$log = " select * from admin where username='$name' and password='$encp' ";
$log1 = mysqli_query($link,$log); 

if( mysqli_fetch_assoc($log1)){ 
    if(isset($_REQUEST['rem'])){
        setcookie("username", $name , time()+60*60*24 , '/' , 'localhost');
    }
    $_SESSION['login'] = true;
    $_SESSION['uname']=$name;
    echo "
            <script>
            window.location='adminmenu.php';
            alert('Login Successfull');
            </script>";
}
            
else{
    echo "<script>
             alert('Login Unsuccessfull');
            window.location='admin.php';
            </script>";
}
?> 