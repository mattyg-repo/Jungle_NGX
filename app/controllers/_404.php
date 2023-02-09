<?php 


class _404
{
	use Controller;
	
	public function index()
	{
		//echo "404 Page not found controller";
		$filename = "../app/views/".APP_THEME."/404.view.php";
		require $filename;
	}
}