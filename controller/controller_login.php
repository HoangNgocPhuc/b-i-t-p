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
				//teacher login
				$arr = $this->model->fetch_one("select * from teacher where pk_code_teacher_id='$c_username' and password='$c_password'");
				if (isset($arr)){
					$_SESSION["c_username"] = $c_username;
					$_SESSION["teacher"] = "ok";
					header("location: index.php");
				}

				//student login
				$arr_st = $this->model->fetch_one("select * from student where pk_code_student_id='$c_username' and password='$c_password'");
				if (isset($arr_st)){
					$_SESSION["c_username"] = $c_username;
					$_SESSION["student"] = "ok";
					header("location: index.php");
				}
			}
			include("view/view_login.php");
		}
	}

	new controller_login();
?>