
<?php header("refresh:1;url=startpage");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
     <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
        <meta charset="utf-8">
        <style>
        </style>
    </head> 
    <body> 
        <div class="bar">
     <ul class="navigator">
        <li><a href="../View/startpage">Tillbaka till startsidan</a></li>
         <li>|</li>
         <li><a href="../View/calendar">Till kalendern</a></li>
         <li>|</li>
         <li><a href="../View/pannkakor">Recept på Pannkakor</a></li>
         <li>|</li>
        <li><a href="../View/kottbullar">Recept på Köttbullar</a></li>
    </ul>
  </div>
        <div class="textblock">
            <?php if($this->session->get(loggedin)): ?>
             <p>Logging in as <?php echo $uname?> </p>
             <?php else: ?>
             <p>Invalid username or password</p>
             <?php endif ?>
             
            <p>Redirecting in 3 seconds!</p>
                
               
  </div>
    </body>