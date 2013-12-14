<?php

namespace Pobjeda\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    	if(!$this->auth->getUser()){
    		$this->view->setTemplateBefore('public');
    	}else{
    		$this->view->setTemplateBefore('private');
    	}    	
    }
}

