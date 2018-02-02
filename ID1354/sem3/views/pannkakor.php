


<!DOCTYPE html>
<html>
    <head>
        <title>Recept Pannkakor</title>
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
                    <li id="marked">Recept på Pannkakor</li>
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
        <h1 id="title">Pannkakor</h1>
           
<div class="textblock">      
 <img id="image" src="../../resources/pannkakor.jpeg" alt="Bild på pannkakor">
  <h1>Ingredienser</h1>
    <ul id="ingredients">
  <li>3 dl Vetemjöl</li>
  <li>6 dl Mjölk</li>
  <li>3 Ägg</li>
  <li>1/2 tsk Salt</li>
  <li>2 msk Smör</li>
    </ul>
</div>

  <div class="textblock">
      <h1>Instruktioner</h1>
      <ul id="instructions">
      <li>Vispa ut mjölet i hälften av mjölken till en slät smet.</li>
       <li>Vispa i resterande mjölk, ägg och salt. Låt smeten svälla ca 10 min.</li>
       <li> Smält smör i en stekpanna och häll ner i smeten.</li>
      <li>Grädda tunna pannkakor.</li></ul>
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
                           <input name='page' type='hidden' value="pannkakor">
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
                        <input type="hidden" name="page" value="pannkakor"> 
                        <button type="submit">Enter Comment</button>
                    </form>
        </li>
        </ul>
            </div>
           <?php endif;?>
     </body>