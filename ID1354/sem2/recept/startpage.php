<?php>
    session_start();?>
$_SESSION['gotopage'] = "pannkakor.php";
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
  <title>Startsida</title>
        <link rel="stylesheet" href="reset.css">
   <link rel="stylesheet" href="stylesheet.css">
</head>
    <body>
       <div class="bar">
               <ul class="navigator">
                <li id="marked">Tillbaka till startsidan</li>
            <li>|</li>
                <li><a href="kalender">Till kalendern</a></li>
            <li>|</li>
                <li><a href="pannkakor">Recept på Pannkakor</a></li>
            <li>|</li>
                <li><a href="kottbullar">Recept på Köttbullar</a></li>
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
        <h1 id="titel">Startsida</h1>
        <div class="textblock">
        <ul id="infotext">
            <li>Välkommen.</li>
            <li> På denna hemsida kan du hitta en kalender som visar vilken måltid som bör tillagas under specifika dagar. Klicka på en bild i kalendern för att få receptet!</li>
            <li>Navigatorn längst upp på sidan kan användas för att nå kalendern.</li>
        </ul>
            </div>
    </body>

