<?php 

/**
 * logout class
 */
class Logout
{
	use Controller;

	public function index()
	{

		if(!empty($_SESSION['user']))
			unset($_SESSION['user']);

		//$data['messages'] = ["successfully logged out"];
		//$this->publicView('login',$data);
		redirect('login/logged_out');
		
	}

}