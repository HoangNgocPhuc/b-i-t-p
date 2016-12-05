<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "ptudw";
	//thuc hien ket noi
	$con = mysqli_connect($hostname,$username,$password,$database);
	//thuc hiet set charset de hien thi tieng viet
	mysqli_set_charset($con,"UTF8");
?>