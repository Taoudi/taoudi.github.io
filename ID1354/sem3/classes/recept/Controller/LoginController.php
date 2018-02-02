<?php

namespace recept\Controller;
use recept\Model\UserHandler;


class LoginController {
    private $userHandler;
      
    public function __construct(){
        $this->userHandler = new UserHandler();
    }
    
  public function userHandler($password, $username){
      $copy = $this->userHandler->isLoginValid($password, $username); 
     return $copy;
  }
  public function registerUser($username, $password){
      return $this->userHandler->registerUser($username, $password);
  }

}