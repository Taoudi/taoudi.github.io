
<!DOCTYPE html>
<html>
    <head>
        <title>Recept Köttbullar</title>
     <link rel="stylesheet" href="../../resources/reset.css">
   <link rel="stylesheet" href="../../resources/stylesheet.css">
        <meta charset="utf-8">
        <style>
        </style>
    </head> 
    <body> 
        <div class="bar">
      <ul class="navigator">
            <li><a href="startpage">Tillbaka till startsidan</a></li>
            <li>|</li>
            <li><a href="calendar">Till kalendern</a></li>
            <li>|</li>
            <li><a href="pannkakor">Recept på Pannkakor</a></li>
            <li>|</li>
            <li id="marked">Recept på Köttbullar</li>
            
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
        <?php if($valid):?>
           <div class="textblock">
               <p>Kommentaren kunde ej läggas till!</p>
        </div>
        <?php endif;?>
        
        <h1 id="title">Köttbullar</h1>        
        <div class="textblock">
            <img id="image" src="../../resources/kottbullar.jpeg" alt="Bild på köttbullar">
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
                <?php for($int = 0 ; $int <= sizeof($comments[0])-1;$int++):?>
                <ul id="usercomment">
                      <li>
                              <?php echo $comments[1][$int] . "  -  ". $comments[0][$int]?>
                      
                          <?php if($comments[0][$int]===$this->session->get('uname') AND $this->session->get('loggedin')): ?>
                              <form name="deletecomment" action="deletecomment" method="post">
                        <button type="submit">Delete comment</button> 
                         <input name='comment' type='hidden' value="<?php echo $comments[1][$int] ?>">
                           <input name='page' type='hidden' value="kottbullar">
                         </form> </li>
                            <?php endif;?>
                </ul>
                 <br />
                    <?php endfor;?> 
            </div>
         <?php if($this->session->get('loggedin')):?>
          <div class="textblock">
            <ul>
                <li>
                    <form action="comment" method="post">
                        <input type="text" placeholder="Comment" name="comment" required>
                        <input type="hidden" name="page" value="kottbullar"> 
                        <button type="submit">Enter Comment</button>
                    </form>
        </li>
        </ul>
            </div>
           <?php endif;?>
        
    </body>