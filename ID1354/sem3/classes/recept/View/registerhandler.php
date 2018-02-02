<?php

namespace recept\View;
use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\LoginController;
use recept\Util\constants;

class registerhandler extends AbstractRequestHandler {
    private $contr;
    private $password;
    private $uname;
    private $exists;
 public function setUname($uname){
            $this->uname = $uname;
        }
           public function setPassword($password){
            $this->password = $password;
        }
    protected function doExecute() {
           $this->contr = new LoginController();
           if(ctype_print($this->password) && ctype_print($this->uname) ){
           $this->exists = $this->contr->registerUser($this->uname,$this->password);
        $this->addVariable('uname',$this->uname);
        $this->addVariable('exists',$this->exists);
           }
        return 'registerhandler';
    }

}
