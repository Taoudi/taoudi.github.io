<?php 
session_start();
$page = $_SESSION['gotopage'];
header("refresh:5;url={$page}");

$count=1;
 if($_SESSION['gotopage']==='pannkakor.php'){
$data=file('com_pan.txt', FILE_IGNORE_NEW_LINES);
 }

 $out = array();
 foreach($data as $line) {
     if($count%2==1){
    $data_copy = $data;
     $line2 = current($data_copy);
     if($line===$_SESSION['username'] AND $line2===$_POST['delcomment']) {
     }
    else{
      array_push($out, $line);
      array_push($out, $line2);
    }    
 }
     $count++;
 }

if($page==="pannkakor.php"){
$fp = fopen("com_pan.txt", "w");
 foreach($out as $line) {
     fwrite($fp, $line."\n");
 }
 fclose($fp);  
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

 <div class="textblock"><p>Tar bort kommentar...</p><br><p>Går tillbaks till föregående sida om 5 sekunder.</p></div>
 </body>
