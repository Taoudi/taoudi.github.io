<?php header("refresh:3;url=register");?>
<!DOCTYPE html>
<html>
 <head>
         <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
  <title>PHP Test</title>
 </head>
 <body>
    
<div class="textblock">
     
    <?php if(!$exists):?>
    <p>Registering <?php echo $uname?>!</p>
    <?php else:?>
    <p><?php echo $uname?> is already registered!<p>
        <?php endif;?>
    <p>Redirecting in 3 seconds!</p>
      
        </div>
 
 </body>
</html>