<?php

namespace Pobjeda\Controllers;

use Pobjeda\Models\EmailConfirmations,
	Pobjeda\Models\ResetPasswords,
	Pobjeda\Models\Users;

/**
 * UserControlController
 *
 * Provides help to users to confirm their passwords or reset them
 */
class UserControlController extends ControllerBase
{

	public function initialize()
	{
		if ($this->session->has('auth-identity')) {
			$this->view->setTemplateBefore('private');
		}
	}

	public function indexAction()
	{

	}

	/**
	 * Confirms an e-mail, if the user must change its password then changes it
	 */
	public function confirmEmailAction()
	{		
		$code = $this->dispatcher->getParam('code');

		$confirmation = EmailConfirmations::findFirstByCode($code);
		$user = Users::findFirstByIdUsers($confirmation->User);

		if (!$confirmation) {
			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		if ($confirmation->confirmed <> 'N') {
			return $this->dispatcher->forward(array(
				'controller' => 'session',
				'action' => 'login'
			));
		}

		$confirmation->confirmed = 'Y';
		$user->active = 'Y';
		$user->save();
		/**
		 * Change the confirmation to 'confirmed' and update the user to 'active'
		 */
		if (!$confirmation->save()) {

			foreach ($confirmation->getMessages() as $message) {
				$this->flash->error($message);
			}

			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		/**
		 * Identity the user in the application
		 */
		$this->auth->authUserById($user->idUsers);

		/**
		 * Check if the user must change his/her password
		 */
		if ($user->mustChangePassword == 'Y') {

			$this->flash->success('The email was successfully confirmed. Now you must change your password');

			return $this->dispatcher->forward(array(
				'controller' => 'users',
				'action' => 'changePassword'
			));
		}

		$this->flash->success('The email was successfully confirmed');

		return $this->dispatcher->forward(array(
			'controller' => 'users',
			'action' => 'index'
		));

	}

	public function resetPasswordAction()
	{
		$code = $this->dispatcher->getParam('code');

		$resetPassword = ResetPasswords::findFirstByCode($code);

		if (!$resetPassword) {
			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		if ($resetPassword->reset <> 'N') {
			return $this->dispatcher->forward(array(
				'controller' => 'session',
				'action' => 'login'
			));
		}

		$resetPassword->reset = 'Y';

		/**
		 * Change the confirmation to 'reset'
		 */
		if (!$resetPassword->save()) {

			foreach ($resetPassword->getMessages() as $message) {
				$this->flash->error($message);
			}

			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		/**
		 * Identity the user in the application
		 */
		$this->auth->authUserById($resetPassword->User);

		$this->flash->success('Please reset your password');

		return $this->dispatcher->forward(array(
			'controller' => 'users',
			'action' => 'changePassword'
		));

	}

}

