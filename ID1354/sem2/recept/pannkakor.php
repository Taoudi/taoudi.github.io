<?php>
    session_start();

$readin=file('com_pan.txt', FILE_IGNORE_NEW_LINES);
$count=1;
$array_count =0;
  $_SESSION['gotopage'] = "pannkakor.php";
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Recept Pannkakor</title>
                <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="stylesheet.css">
        <meta charset="utf-8">
        <style>
        </style>
    </head> 
        <body>
            <div class="bar">
                <ul class="navigator">
                    <li><a href="startpage.php">Tillbaka till startsidan</a></li>
                    <li>|</li>
                    <li><a href="kalender.php">Till kalendern</a></li>
                    <li>|</li>
                    <li id="marked">Recept på Pannkakor</li>
                    <li>|</li>
                    <li><a href="kottbullar.php">Recept på Köttbullar</a></li>
                </ul>
                <ul class="login">
                    <?php if(!isset($_SESSION['logged_in'])): ?>
                    <li><form action="login.php" method="post">Username:
                        <input type="text" placeholder="Username" name="uname" required>
                    Password:
                        <input type="text" placeholder="Password" name="password" required>
                        <button type="submit">Log in</button>
                        </form>
                        </li>
                    <?php  elseif($_SESSION['logged_in']==true) :?>
                    <li><form action="logout.php" method="post">You are logged in as <?php echo $_SESSION['username']; ?>!
                    <button type="submit">Log out</button></form> </li>
                    <?php endif; ?>      
                </ul>
                
                <ul class="register">
                     <?php if(!isset($_SESSION['logged_in'])): ?>
               <li>  <form action="register.php" method="post">Dont have an account? <button type="submit">Register here!</button></form></li>
                     <?php endif; ?>  
                </ul>
            </div>
        <h1 id="title">Pannkakor</h1>
           
<div class="textblock">      
 <img id="image" src="pannkakor.jpeg" alt="Bild på pannkakor">
  <h1>Ingredienser</h1>
    <ul id="ingredients">
  <li>3 dl Vetemjöl</li>
  <li>6 dl Mjölk</li>
  <li>3 Ägg</li>
  <li>1/2 tsk Salt</li>
  <li>2 msk Smör</li>
    </ul>
</div>

  <div class="textblock">
      <h1>Instruktioner</h1>
      <ul id="instructions">
      <li>Vispa ut mjölet i hälften av mjölken till en slät smet.</li>
       <li>Vispa i resterande mjölk, ägg och salt. Låt smeten svälla ca 10 min.</li>
       <li> Smält smör i en stekpanna och häll ner i smeten.</li>
      <li>Grädda tunna pannkakor.</li></ul>
    </div>
<div class="textblock">
                <h1>User Comments</h1>
    <ul id="usercomment">
         <?php foreach($readin as $string):?>
        <li>
            <form name="deletecomment" action="deletecomment.php" method="post">
        <?php if($count%2==1): ?>
                <?php $readin_copy = $readin;
                echo current($readin_copy);?>
             - <?php  echo $string?> 
                    <?php if($string===$_SESSION['username']):?> 
            <button type="submit">Delete comment</button> 
        <input name='delcomment' type='hidden' value="<?php echo current($readin_copy);?>">
            </form>
        <?php endif;?>
            <?php endif; ?>
            <?php $count++;?>
        </li>
        <br />
        <?php endforeach; ?>
    </ul>
            </div>
        <br />
            
            <div class="textblock">
        <ul>
         <?php if($_SESSION['logged_in']==true):?>
        <li><form action="comment.php" method="post"> <input type="text" placeholder="Comment" name="comment" required><button type="submit">Enter Comment</button></form>
        </li>
        <?php endif;?>
        </ul>
            </div>
    </body>