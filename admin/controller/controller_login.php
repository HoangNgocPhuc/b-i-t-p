<?php
	/**
	* 
	*/
	class controller_login extends controller
	{
		function __construct()
		{
			parent::__construct();
			# code...
			if (isset($_POST["btnLogin"])){
				$c_username =  $_POST["c_username"];
				$c_password = $_POST["c_password"];
				$c_password = md5($c_password);
				$arr = $this->model->fetch_one("select * from admin where name='$c_username' and password='$c_password'");
				if (isset($arr)){
					$_SESSION["c_username_admin"] = $c_username;
					header("location: index.php");
				}
			}
			include("view/view_login.php");
		}
	}

	new controller_login();
?>