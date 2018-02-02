<?php

namespace recept\View;

use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\CommentController;
use recept\Util\constants;

class comment extends AbstractRequestHandler{
    private $page;
    private $comment;
    private $user;
    private $contr;
    
      public function setComment($comment){
                   $this->comment =$comment;

        }
           public function setPage($page){
               
                  if(ctype_alpha($page)){
                   $this->page = $page;
               }
               else{
                   $this->page = "startpage";
               }
        }
    protected function doExecute() {
        $this->contr = new CommentController();
        $this->user = $this->user = $this->session->get('uname');
       
        if(ctype_print($this->comment) && ctype_print($this->user)){
              $valid = $this->contr->enterComment($this->user, $this->comment,$this->page);
             $this->addVariable('valid',!$valid);
              $this->addVariable('comments',$this->contr->getComments($this->page));
        }
        return $this->page;
    }

}
