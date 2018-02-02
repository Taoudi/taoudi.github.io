
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
  <title>Startsida</title>
        <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
</head>
    <body>
       <div class="bar">
               <ul class="navigator">
                <li id="marked">Tillbaka till startsidan</li>
            <li>|</li>
                <li><a href="calendar">Till kalendern</a></li>
            <li>|</li>
                <li><a href="pannkakor">Recept på Pannkakor</a></li>
            <li>|</li>
                <li><a href="kottbullar">Recept på Köttbullar</a></li>
            </ul>
           <ul class="login">
               <?php if(!$this->session->get('loggedin')):?>
                    <li><form action="login" method="post">Username:
                        <input type="text" placeholder="Username" name="uname" required>
                    Password:
                        <input type="text" placeholder="Password" name="password" required>
                        <button type="submit">Log in</button>
                        </form>
                    </li>      
                     <li><form action="register" method="post">
                        <button type="submit">Click here to register!</button>
                        </form>
                    </li>      
            <?php else: ?>
            <li><form action="logout" method="post">You are logged in as <?php echo $this->session->get('uname') ?>!
                    <button type="submit">Log out</button></form> </li>
                    <?php endif; ?>      
                  </ul>
    
   
  </div>
        <?php if($loggedout):?>
        <div class="textblock">
        <ul id="infotext">
            <li>Du har loggats ut!</li>
        </ul>
            </div>
        <?php endif;?>
        <h1 id="titel">Startsida</h1>
        <div class="textblock">
        <ul id="infotext">
            <li>Välkommen.</li>
            <li> På denna hemsida kan du hitta en kalender som visar vilken måltid som bör tillagas under specifika dagar. Klicka på en bild i kalendern för att få receptet!</li>
            <li>Navigatorn längst upp på sidan kan användas för att nå kalendern.</li>
        </ul>
            </div>
    </body>

