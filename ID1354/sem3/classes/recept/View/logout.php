<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace recept\View;
use Id1354fw\View\AbstractRequestHandler;


class logout extends AbstractRequestHandler {

    protected function doExecute() {
        $this->session->set('loggedin',false);
        $this->addVariable('loggedout',true);
        return 'startpage';
    }
}
