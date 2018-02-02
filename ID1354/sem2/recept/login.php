<?php session_start();
 $page = $_SESSION['gotopage'];
header("refresh:5;url={$page}");
$loggedin=false;
     if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
         $loggedin = true;
     }


$readin=file('users.txt', FILE_IGNORE_NEW_LINES);
$count=1;

$valid = false;

if(isset($_POST['uname']) AND isset($_POST['password'])){
foreach($readin as $user){
    if($count%2==1){
        $readin_copy = $readin;
        $password = current($readin_copy);
    if($_POST['uname'] === $user AND $_POST['password'] ===$password){
        $valid = true;
        $_SESSION['username'] = $_POST['uname'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['logged_in']=true;
    }
    }
  $count++;
}
    if($valid==false){
        unset($_SESSION['logged_in']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
    }
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