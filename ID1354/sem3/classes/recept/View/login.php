<?php

namespace recept\View;
use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\LoginController;
use recept\Util\constants;

class login extends AbstractRequestHandler {
    private $uname;
    private $password;
    private $loggedin;
    private $contr;
    
        public function setUname($uname){
            $this->uname = $uname;
        }
           public function setPassword($password){
            $this->password = $password;
        }
        
    protected function doExecute() {
        $this->contr = new LoginController();
      //  $this->addVariable('list', $this->contr->getList());
                $this->session->restart();
      if(ctype_print($this->uname) && ctype_print($this->password) ){
        $this->loggedin= $this->contr->userHandler($this->password, $this->uname);
        $this->session->set(constants::LOGIN_CONTR_KEY, $this->contr);
        $this->session->set('loggedin',$this->loggedin);
        $this->session->set('uname',$this->uname);
        $this->addVariable('uname',$this->uname);
        $this->addVariable('loggedin',$this->loggedin);
      }
        return 'login';
    }
}
