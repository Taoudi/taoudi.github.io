<?php session_start();
 $page = $_SESSION['gotopage'];
header("refresh:2;url={$page}");
$loggedin=false;
     if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
         $loggedin = true;
     }

$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "recept";
$conn = new \mysqli($servername, $username, $password, $dbname) or die("connection failed");
$query = "SELECT * from user";
$result =$conn->query($query);
$valid = false;
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                if($row['user'] ===$_POST['uname'] AND password_verify($_POST['password'],$row['pass'])){
                   $valid = true; 
                       $_SESSION['logged_in']=true;
                       $_SESSION['username']=$row['user'] ;
                }           
            }
        }

    if($valid==false){
        unset($_SESSION['logged_in']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
    }

?>
<!DOCTYPE html>

    
<html>
 <head>
  <title>Login</title>
   <link rel="stylesheet" href="reset.css">
   <link rel="stylesheet" href="stylesheet.css">
     
 </head>
 <body>
     <div class="textblock">
          <?php if(isset($_POST['uname']) AND isset($_POST['password'])):?>
     <?php if($loggedin == true):?>
    <p> Already logged in!</p>
     <?php endif; ?>
     
     <?php if($valid == true):?>
  <p> Logging in as <?php echo $_POST['uname']; ?>! </p>
     <?php else:?>
   <p> Incorrect username or password !</p>
     <?php endif;?>
         <?php endif;?>
   <p>Redirecting you back to the previous page in 5 seconds!</p>
         </div>
 </body>