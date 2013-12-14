<?php

namespace Pobjeda\Controllers;

use Pobjeda\Forms\LoginForm,
	Pobjeda\Forms\SignUpForm,
	Pobjeda\Forms\ForgotPasswordForm,
	Pobjeda\Auth\Auth,
	Pobjeda\Auth\Exception as AuthException,
	Pobjeda\Models\Users,
	Pobjeda\Models\SuccessLogouts,	
	Pobjeda\Models\ResetPasswords,
	Pobjeda\Models\EmailConfirmations,
	Pobjeda\ViaNetSMS\ViaNettSMS;

class SessionController extends ControllerBase
{

	public function initialize()
	{
		$this->view->setTemplateBefore('public');
	}

	public function indexAction()
	{

	}

	public function signupAction()
	{
		$form = new SignUpForm();

		if ($this->request->isPost()) {

			if ($form->isValid($this->request->getPost()) != false) {

				$user = new Users();

				$user->assign(array(
					'name' => $this->request->getPost('name', 'striptags'),
					'email' => $this->request->getPost('email'),
					'password' => $this->security->hash($this->request->getPost('password')),
					'Profiles' => 1,
					'username' => $this->request->getPost('username'),
					'mobile' => $this->request->getPost('mobile')
				));

				if ($user->save()) {

					// Send confirmation email
			        $emailConfirmation = EmailConfirmations::findFirstByUser($user->idUsers);
			        $to = $this->request->getPost('email');
		        	$code = $emailConfirmation->code;
			        $headers = 'From: no-reply@seebn.com';
			      
			        $publicUrl = 'seebn.com/seeecono';
			        $confirmUrl = '/confirm/' . $code . '/' . $to;
			        
			        $emailHtml = 'You have successfully created a Pobjeda account. To activate it, please click to verify your email address.http://'.$publicUrl.$confirmUrl;

			        mail($to, 'Confirmation email', $emailHtml, $headers);

					// Send SMS.
					/*$Username = "eomeroff@gmail.com";
					$Password = "2dyty";
					$MsgSender = $this->request->getPost('mobile');
					$DestinationAddress = $this->request->getPost('mobile');
					$Message = "You have created account on seebn.com/seeecono, please check your email". $this->request->getPost('email');

					$ViaNettSMS = new ViaNettSMS($Username, $Password);
					try
					{
						$Result = $ViaNettSMS->SendSMS($MsgSender, $DestinationAddress, $Message);

						if ($Result->Success){
							$this->flash->notice('SMS successfully sent to ' . $this->request->getPost('mobile'));							
						}
						else{
							$this->flash->error("Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage);							
						}
					}
					catch (Exception $e)
					{
						$this->flash->error("Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage);

						return $this->dispatcher->forward(array(
							'controller' => 'index',
							'action' => 'index'
						));
					}*/

					return $this->dispatcher->forward(array(
						'controller' => 'index',
						'action' => 'index'
					));
				}

				$this->flash->error($user->getMessages());
			}
		}

		$this->view->form = $form;
	}

	/**
	 * Starts a session in the admin backend
	 */
	public function loginAction()
	{

		$form = new LoginForm();

		try {

			if (!$this->request->isPost()) {

				if ($this->auth->hasRememberMe()) {
					return $this->auth->loginWithRememberMe();
				}

			} else {

				if ($form->isValid($this->request->getPost()) == false) {
					foreach ($form->getMessages() as $message) {
						$this->flash->error($message);
					}
				} else {
					$this->auth->check(array(
						'email' => $this->request->getPost('email'),
						'password' => $this->request->getPost('password'),
						'remember' => $this->request->getPost('remember')
					));

					return $this->response->redirect('users');
				}
			}

		} catch (AuthException $e) {
			$this->flash->error($e->getMessage());
		}

		$this->view->form = $form;
	}

	/**
	 * Shows the forgot password form
	 */
	public function forgotPasswordAction()
	{
		$form = new ForgotPasswordForm();

		if ($this->request->isPost()) {

			if ($form->isValid($this->request->getPost()) == false) {
				foreach ($form->getMessages() as $message) {
					$this->flash->error($message);
				}
			} else {

				$user = Users::findFirstByEmail($this->request->getPost('email'));
				if (!$user) {
					$this->flash->success('There is no account associated to this email');
				} else {

					$resetPassword = new ResetPasswords();
					$resetPassword->User = $user->idUsers;
					if ($resetPassword->save()) {

				        $to = $this->request->getPost('email');
			        	$code = $resetPassword->code;
				        $headers = 'From: no-reply@seebn.com';
				      
				        $publicUrl = 'seebn.com/seeecono';
				        $confirmUrl = '/reset-password/' . $code . '/' . $to;
				        
				        $emailHtml = 'To reset your password please click.http://'.$publicUrl.$confirmUrl;

				        mail($to, 'Reset password', $emailHtml, $headers);


						$this->flash->success('Success! Please check your messages for an email reset password');
					} else {
						foreach ($resetPassword->getMessages() as $message) {
							$this->flash->error($message);
						}
					}
				}
			}
		}

		$this->view->form = $form;
	}

	/**
	 * Closes the session
	 */
	public function logoutAction()
	{
		$user = $this->auth->getUser();	

		var_dump($user);

		$successLogout = new SuccessLogouts();
		$successLogout->User = $user->idUsers;
		$successLogout->ipAddress = $this->request->getClientAddress();
		$successLogout->userAgent = $this->request->getUserAgent();
		if (!$successLogout->save()) {
			$messages = $successLogout->getMessages();
			throw new Exception($messages[0]);
		}

		$this->auth->remove();
		return $this->response->redirect('index');
	}
}

