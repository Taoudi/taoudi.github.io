<?php


namespace recept\View;
use Id1354fw\View\AbstractRequestHandler;
use recept\Controller\LoginController;
use recept\Util\constants;

class DefaultRequestHandler extends AbstractRequestHandler {

   
    protected function doExecute() {
         $this->session->restart();
        \header('Location: /Sem3/recept/View/startpage');
    }
}
