
<!DOCTYPE html>

<html><head>
    <meta charset="UTF-8">
  <title>Calendar</title>
         <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
</head><body>
    
<div class="bar">
     <ul class="navigator">
        <li><a href="startpage">Tillbaka till startsidan</a></li>
         <li>|</li>
         <li id="marked">Till kalendern</li>
         <li>|</li>
         <li><a href="pannkakor">Recept på Pannkakor</a></li>
         <li>|</li>
        <li><a href="kottbullar">Recept på Köttbullar</a></li>
    </ul>
    <ul class="login">
               <?php if($this->session->get('loggedin')):?>
                  <li><form action="logout" method="post">You are logged in as <?php echo $this->session->get('uname') ?>!
                    <button type="submit">Log out</button></form> </li> 
              <?php else: ?>
           
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
    <li id="pannkakor"><a href="pannkakor">
        <img class="calendarimage" src="../../resources/pannkakor.jpeg" alt="Bild på pannkakor">        
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
    <li><a href="kottbullar">
        <img class="calendarimage" src="../../resources/kottbullar.jpeg" alt="Bild på köttbullar">        
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