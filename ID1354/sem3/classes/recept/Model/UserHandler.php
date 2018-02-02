<?php

namespace recept\Model;
use recept\DAO\loginDAO;
class UserHandler {
    //private $userlist = file('../../resources/users.txt', FILE_IGNORE_NEW_LINES);

    private $logindata;
    
    public function __construct(){
        $this->logindata = new loginDAO();
    }
    
    public function isLoginValid($password, $username){
        $arr = $this->logindata->isLoginValid();
        $valid = false;
        for($int = 0; $int<sizeof($arr);$int++){
            if(password_verify($password,$arr[$int][1]) AND $username ===$arr[$int][0]){
                $valid = true;
            }
        }
      return $valid;
    }
    
    
    public function registerUser($username,$password){
         $pass = password_hash($password, PASSWORD_DEFAULT);
        $arr = $this->logindata->doesUserExist();
        $exists = false;
        for($int = 0; $int<sizeof($arr);$int++){
            if($arr[$int] === $username){
                $exists = true;
            }
        }
        if($exists== false){
            $this->logindata->registerUser($username, $pass);
        }
        return $exists;
    }
}
