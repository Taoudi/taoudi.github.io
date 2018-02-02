<?php
    session_start();
$_SESSION['gotopage'] = 'kottbullar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recept Köttbullar</title>
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
            <li><a href="pannkakor.php">Recept på Pannkakor</a></li>
            <li>|</li>
            <li id="marked">Recept på Köttbullar</li>
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
        <h1 id="title">Köttbullar</h1>        
        <div class="textblock">
            <img id="image" src="kottbullar.jpeg" alt="Bild på köttbullar">
             <h1>Ingredienser</h1>
            <ul id="ingredients">
             <li>500 g köttfärs</li>
            <li>½ dl ströbröd </li>
            <li>1 dl matlagningsgrädde</li>
            <li>2 msk finhackad lök</li>
            <li>1 ägg</li>
            <li>1 tsk salt</li>
            <li>1 krm svartpeppar</li>
            <li>2 msk smör och rapsolja</li>
            </ul>
        </div>

            <div class="textblock">
                <h1>Instruktioner</h1>
                <ul id="instructions">
                <li>Blanda ströbröd och grädde. Låt svälla 10 min.</li>
                <li>Lägg i färs, lök, ägg, salt och peppar.</li>
                <li>Rör till en jämn smet. Forma smeten till jämna bullar.</li>
                <li>Stek dem i smör och rapsolja på medelvärme 3-5 min. </li>
                <li>Skala potatisen och skär i bitar. </li>
                <li>Koka den mjuk i lättsaltat vatten 10-15 min.</li>
                <li>Häll av vattnet och pressa potatisen genom purépress eller mosa med en stöt direkt i kastrullen.</li>
                <li>Värm mjölken och grädden och rör ner i potatisen.</li>
                <li>Smaksätt med salt och peppar. Rör moset luftigt.</li>
                <li>Servera köttbullarna med potatismoset och gurkan skuren i skivor.</li>
            </ul>
        </div>
           <div class="textblock">
            <h1>User Comments</h1>
            <ul id="usercomment"  data-bind="foreach: comments">
                <li><p><strong data-bind="text: comment"></strong> - <strong data-bind="text: user"></strong></p>
                       <button data-bind="visible: display(), click: $parent.deleteComment.bind($data, comment,user)" >Delete Comment</button>
                    
                
                </li>
            </ul>
        </div>
        <br />
        <?php if (isset($_SESSION['logged_in'])): ?>
<?php if ($_SESSION['logged_in'] == true): ?>
            <div class="textblock">
                <ul>
                    <li>      
                        <form name="commentform" data-bind="submit: enterComment.bind($data,$data.comment )">
                            <input type="text" data-bind="value: $data.comment"/>
                            <button type="submit">Submit Comment</button>
                        </form>
                    </li>

                </ul>
            </div>
<?php endif; ?>
        <?php endif; ?>
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script type='text/javascript' src="knockout.js"></script>
        <script type='text/javascript' src="comment.js"></script>

    </body>