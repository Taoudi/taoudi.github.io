<?php session_start(); 
 $page = $_SESSION['gotopage'];
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
                    <ul><?php if(!isset($_SESSION['logged_in'])): ?>
                        <li>Enter the username you want to use and a password!</li>
                    <li><form action="registerhandler.php" method="post">Username:
                        <input type="text" placeholder="Username" name="uname" required>
                    Password:
                        <input type="text" placeholder="Password" name="password" required>
                        <button type="submit">Register</button>
                        </form>
                        </li>
                    <?php  elseif($_SESSION['logged_in']==true) :?>
                        <li><form action="<?php echo $page;?>" method="post"><p>Du är redan inloggad som <?php echo $_SESSION['username']; ?>!</p>
                    <button type="submit">Tillbaka till föregående sida</button></form> </li>
                    <?php endif; ?>   
                        </ul>
        </div>
 </body>
</html>