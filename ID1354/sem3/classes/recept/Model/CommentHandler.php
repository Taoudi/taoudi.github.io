<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace recept\Model;
use recept\DAO\commentDAO;
/**
 * Description of CommentHandler
 *
 * @author Taoudi
 */
class CommentHandler {
    private $commentData;
    public function __construct(){
        $this->commentData = new commentDAO();
    }

    public function enterComment($user,$comment,$page){
        return $this->commentData->enterComment($user, $comment,$page);
    }
 
     public function getComments($page){
         $arr = array( 0=> array() , 1=> array());
         $result =  $this->commentData->getComments($page); 
          
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                array_push($arr[0],htmlentities(htmlentities($row["user"], ENT_QUOTES), ENT_QUOTES));
                array_push($arr[1],htmlentities(htmlentities($row["comment"], ENT_QUOTES), ENT_QUOTES));
            }
        }
        else{
          array_push($arr, "no result");
        }
        return $arr;
    }

    public function deleteComment($user,$comment,$page){
        return $this->commentData->deleteComment(html_entity_decode($user), html_entity_decode($comment),$page);
    }
}
