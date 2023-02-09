<?php 


/**
 * User class
 */
class User
{
	
	use Model;

	protected $limit 		= 10;
	protected $offset 		= 0;
	protected $order_type 	= "desc";
	protected $order_column = "user_email";
	protected $table = 'users';

	protected $allowedColumns = [

		'email',
		'password',
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['email']))
		{
			$this->errors['email'] = "Email is required";
		}else
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}
		
		if(empty($data['password']))
		{
			$this->errors['password'] = "Password is required";
		}
		
		if(empty($data['terms']))
		{
			$this->errors['terms'] = "Please accept the terms and conditions";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}