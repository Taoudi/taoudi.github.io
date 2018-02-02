<?php

namespace recept\View;
use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\CommentController;

class pannkakor extends AbstractRequestHandler {
  private $contr;

    protected function doExecute() {
         $this->contr=new CommentController();
         $this->addVariable('comments',$this->contr->getComments("pannkakor"));
        return 'pannkakor';
    }

}
