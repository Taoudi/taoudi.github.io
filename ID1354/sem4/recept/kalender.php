<?php
    session_start();
$_SESSION['gotopage'] = "pannkakor.php";?>

<!DOCTYPE html>

<html><head>
    <meta charset="UTF-8">
  <title>Calendar</title>
            <link rel="stylesheet" href="reset.css">

   <link rel="stylesheet" href="stylesheet.css">
</head><body>
    
<div class="bar">
     <ul class="navigator">
        <li><a href="startpage.php">Tillbaka till startsidan</a></li>
         <li>|</li>
         <li id="marked">Till kalendern</li>
         <li>|</li>
         <li><a href="pannkakor.php">Recept på Pannkakor</a></li>
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
    
    <div class="month"> 
  <ul>
    <li>
      November<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
    <li id="pannkakor"><a href="pannkakor.php">
        <img class="calendarimage" src="pannkakor.jpeg" alt="Bild på pannkakor">        
        </a></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
    <li><a href="kottbullar.php">
        <img class="calendarimage" src="kottbullar.jpeg" alt="Bild på köttbullar">        
        </a></li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</body>