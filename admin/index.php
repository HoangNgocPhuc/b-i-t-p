<?php
	session_start();
	//include file config
	include "../config.php";
	//include file model
	include "model/model.php";

	include "controller/controller.php";
	if (isset($_SESSION["c_username_admin"])){
		$controller = "";
		if(isset($_GET["controller"])){
			$controller = "controller/controller_".$_GET["controller"].".php";
		}		
		include "view/view_layout.php";
	}
	else{
		//load controller login
		include "controller/controller_login.php";
	}

?>