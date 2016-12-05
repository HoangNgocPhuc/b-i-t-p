<?php
	/**
	* 
	*/
	class controller_logout
	{
		
		function __construct()
		{
			# code...
			unset($_SESSION["c_username_admin"]);
			header("location:index.php");
		}
	}
	new controller_logout();
?>