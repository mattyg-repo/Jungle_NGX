<?php 

/**
 * home class
 */
class Home
{
	use Controller;



	public function index()
	{
		//$data['user'] = empty($_SESSION['user']) ? 'User':$_SESSION['user']->email;
		//show($_SESSION["user"]->permissions);
		$this->protectedView('home',$data);
	}

}