<?php 

/**
 * home class
 */
class Api_User
{
	
	public function index()
	{
		$user = new User;
		//outputJSON($user->findAll());
	}

	public function all()
	{

		echo "Welcome all Api_User ";
	}
}