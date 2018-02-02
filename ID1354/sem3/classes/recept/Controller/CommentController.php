<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace recept\Controller;
use recept\Model\CommentHandler;
/**
 * Description of CommentController
 *
 * @author Taoudi
 */
class CommentController {
    private $commentHandler;
    public function __construct(){
        $this->commentHandler = new CommentHandler();
    }
    
    public function getComments($page){
      $copy = $this->commentHandler->getComments($page); 
     return $copy;
  }
  
  public function enterComment($username,$comment,$page){
      return $this->commentHandler->enterComment($username,$comment,$page);
  }
  
  public function deleteComment($username,$comment, $page){
       return $this->commentHandler->deleteComment($username,$comment,$page);
  }
  
}
