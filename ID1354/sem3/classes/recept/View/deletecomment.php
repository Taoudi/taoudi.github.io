<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace recept\View;

use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\CommentController;

class deletecomment extends AbstractRequestHandler {
    private $page;
    private $comment;
    private $user;
        public function setComment($comment){
            $this->comment = $comment;
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
        $this->user = $this->session->get('uname');
          if(ctype_print($this->comment) && ctype_print($this->user) ){
               $validcomment = $this->contr->deleteComment($this->user, $this->comment,$this->page);
               $this->addVariable('validcomment',!$validcomment);
               $this->addVariable('comments',$this->contr->getComments($this->page));
          }
        return $this->page;
    }

}
