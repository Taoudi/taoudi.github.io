<?php 
session_start();
$page = $_SESSION['gotopage'];
header("refresh:5;url= {$page} ");

if($page === 'pannkakor.php'){
$readin=file('com_pan.txt', FILE_IGNORE_NEW_LINES);
}

elseif($page==='kottbullar.php'){
   $readin=file('com_kott.txt', FILE_IGNORE_NEW_LINES); 
}


$count=1;
$exists = false;
if(isset($_POST['comment']) AND isset($_SESSION['username'])){
foreach($readin as $user){
    if($count%2==1){
        $readin_copy = $readin;
        $comment = current($readin_copy);
         if($_SESSION['username'] === $user AND $_POST['comment'] === $comment){
             $exists=true;
         }
    }
    $count++;
}
    if($exists==false){
        
        if($page === 'pannkakor.php'){
    $my_file = 'com_pan.txt';
}
        
          if($page === 'kottbullar.php'){
    $my_file = 'com_kott.txt';
}

$handle = fopen($my_file,'a');
$data = $_SESSION['username'];
fwrite($handle,"\n".$data);
$data = $_POST['comment'];
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
  <title>Submit comment</title>
 </head>
 <body>
    
     <div class="textblock">
         <?php  if($exists == true): ?>
<p>Du har redan skrivit denna kommentar!</p>
         <?php else :?>
         <p>Skriver kommentar...</p>
        <?php endif;?>
         <p>Går tillbaka till föregående sida om 5 sekunder!</p>
        </div>

 </body>