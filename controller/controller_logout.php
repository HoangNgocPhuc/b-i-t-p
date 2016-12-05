<?php
	/**
	* 
	*/
	class controller_logout
	{
		
		function __construct()
		{
			# code...
			unset($_SESSION["c_username"]);
			unset($_SESSION["teacher"]);
			unset($_SESSION["student"]);
			header("location:index.php");
		}
	}
	new controller_logout();
?>