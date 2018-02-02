<?php 
session_start();
     $page = $_SESSION['gotopage'];
header("refresh:5;url={$page}");
$exists = false;
$readin=file('users.txt', FILE_IGNORE_NEW_LINES);
$count=1;
if(isset($_POST['uname']) AND isset($_POST['password'])){
foreach($readin as $user){
    if($count%2==1){
        $readin_copy = $readin;
        $password = current($readin_copy);
         if($_POST['uname'] === $user){
             $exists=true;
         }
    }
    $count++;
}

if($exists==false){
    $my_file = 'users.txt';
$handle = fopen($my_file,'a');
$data = $_POST['uname'];
fwrite($handle,"\n".$data);
$data = $_POST['password'];
fwrite($handle,"\n".$data);
fclose($handle);
}
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