
<!DOCTYPE html>
<html>
 <head>
        <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
  <title>Register</title>
 </head>
 <body>
       <div class="bar">
                <ul class="navigator">
                    <li><a href="startpage">Tillbaka till startsidan</a></li>
                    <li>|</li>
                    <li><a href="calendar">Till kalendern</a></li>
                    <li>|</li>
                    <li> <a href="pannkakor">Recept på Pannkakor</a></li>
                    <li>|</li>
                    <li><a href="kottbullar">Recept på Köttbullar</a></li>
                </ul>
       </div>
<div class="textblock">
                    <ul>
                        <li>Enter the username you want to use and a password!</li>
                    <li><form action="registerhandler" method="post">Username:
                        <input type="text" placeholder="Username" name="uname" required>
                    Password:
                        <input type="text" placeholder="Password" name="password" required>
                        <button type="submit">Register</button>
                        </form>
                        </li>
                        </ul>
        </div>
 </body>
</html>