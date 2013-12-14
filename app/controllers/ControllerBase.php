<?php

namespace Pobjeda\Controllers;

use Phalcon\Mvc\Controller,
	Phalcon\Mvc\Dispatcher;

/**
 * ControllerBase
 *
 * This is the base controller for all controllers in the application
 */
class ControllerBase extends Controller
{
	public function beforeExecuteRoute(Dispatcher $dispatcher)
	{
		$controllerName = $dispatcher->getControllerName();
		$actionName = $dispatcher->getActionName();		

		//Only check permissions on private controllers
		if ($this->acl->isPrivate($controllerName, $actionName)) {

			//Get the current identity
			$identity = $this->auth->getIdentity();

			//If there is no identity available the user is redirected to index/index
			if (!is_array($identity)) {

				$this->flash->notice('You don\'t have access to this module: private');

				$dispatcher->forward(array(
					'controller' => 'index',
					'action' => 'index'
				));
				return false;
			}
		}
	}
}