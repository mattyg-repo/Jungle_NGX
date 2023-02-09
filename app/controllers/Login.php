<?php 

/**
 * login class
 */
class Login
{
	use Controller;

	public function index(){
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$user = new User;
			$arr['user_email'] = $_POST['email'];

			//$row = $user->first($arr);

			$row = $user->get_row("SELECT * FROM `users` JOIN `user_roles` USING (`role_id`) WHERE `user_email`=?",[$_POST["email"]]);
		

			if($row){
				if($row->user_password === md5($_POST["password"]))
				{	
					unset($row->user_password);
					//show($row);
					$_SESSION["user"] = $row;
					$_SESSION["user"]->permissions = [];
					$_SESSION["expire"] = time()+60*120;
					//unset($_SESSION["user"]["user_password"]);
					$perm = $user->query("SELECT * FROM `user_roles_permissions` WHERE `role_id`=?", [$row->role_id]);
					foreach ($perm as $p) { $_SESSION["user"]->permissions[] = $p->perm_id;}

					redirect('home');
				}else
					$user->errors['password'] = "Wrong password";
			}else{
				$user->errors['email'] = "Invalid email or password";
			}

			$data['errors'] = $user->errors;
		}
		$this->publicView('login',$data);
	}


}