<?php 
session_start();
     $page = $_SESSION['gotopage'];
header("refresh:5;url={$page}");
$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "recept";
$conn = new \mysqli($servername, $username, $password, $dbname) or die("connection failed");
 $query = "SELECT user from user";
 $exists=false;
        $result =$conn->query($query);
        $arr = array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
               if($row['user'] === $_POST['uname']){
                   $exists=true;
               }        
            }
        }
        
        if(!$exists){
        $query = $conn->prepare( "INSERT INTO user (user, pass) VALUES (?,?)");
        $query->bind_param("ss", $_POST['uname'], password_hash($_POST['password'], PASSWORD_DEFAULT));
        $query->execute();
        }
 ?>

<!DOCTYPE html>
<html>
 <head>
            <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="stylesheet.css">
  <title>PHP Test</title>
 </head>
 <body>
    
<div class="textblock">
     <?php if(isset($_POST['uname']) AND isset($_POST['password'])):?>
    <p><?php if($exists == true): ?>
        <?php echo $_POST['uname']?> är redan registrerad!
        <?php else: ?>
         Registrerar användare <?php echo $_POST['uname']?> !
        <?php endif; ?> </p>
        <p>Går tillbaka till föregående sida om 5 sekunder!</p>
        <?php else:?>
     <p>Går tillbaka till föregående sida</p>
    <?php endif;?>
        </div>
 
 </body>
</html>