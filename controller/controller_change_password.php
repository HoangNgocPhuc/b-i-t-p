<?php
	/**
	* 
	*/
	class change_password extends controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			if (isset($_POST["btnChange"])){
				$old_password = md5($_POST["old_password"]);
				$c_username = $_SESSION["c_username"];
				
				//change pass teacher
				if (isset($_SESSION["teacher"])){
					$arr = $this->model->num_rows("select pk_code_teacher_id from teacher where pk_code_teacher_id='$c_username' and password='$old_password'");
					if ($arr > 0){
						$new_password = md5($_POST["new_password"]);
						$this->model->execute("update teacher set password='$new_password' where pk_code_teacher_id='$c_username'");
						header("location:index.php");
					}
					else{
						echo "<script>alert('Bạn nhập sai mật khẩu cũ')</script>";
					}
				}

				// change pass student
				if (isset($_SESSION["student"])){
					$arr = $this->model->num_rows("select pk_code_student_id from student where pk_code_student_id='$c_username' and password='$old_password'");
					if ($arr > 0){
						$new_password = md5($_POST["new_password"]);
						$this->model->execute("update student set password='$new_password' where pk_code_student_id='$c_username'");
						header("location:index.php");
					}
					else{
						echo "<script>alert('Bạn nhập sai mật khẩu cũ')</script>";
					}
				}
			}
			include ("view/view_change_password.php");
		}
	}

	new change_password();
?>