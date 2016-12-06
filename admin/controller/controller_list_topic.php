<?php 
	/**
	* 
	*/
	ob_start();
	class controller_list_topic extends Controller
	{
		function __construct(){
			parent::__construct();
		}
		// view list lecture
		public function view_list_topic()
		{
			# code...
			$arr = $this->model->fetch("select * from topic");
			include ("view/view_list_topic.php");
		}

		//add 1 lecture
		public function add_topic()
		{
			# code...
			if ($_SERVER["REQUEST_METHOD"]=="POST"){
				$code_lecture = isset($_POST["code_lecture"]) ? $_POST["code_lecture"]:"";

				$name = isset($_POST["name"]) ? $_POST["name"]:"";

				$email = isset($_POST["email"]) ? $_POST["email"]:"";
				
				//insert dâtbase
				if ( $this->model->num_rows("select * from topic where pk_code_student_id='$code_lecture'")>0 ){
					echo "<script>alert('Sinh viên này đã được làm đề tài')</script>";
				}
				else{
					$this->model->execute("insert into topic(pk_code_student_id, name, mail) VALUES('$code_lecture', '$name', '$email')");
					
					include ("controller/controller_topic.php");
					$a->send_mail($email);
					header("location:index.php?controller=list_topic");
				}
			}
		}
	}
	$lecture = new controller_list_topic();
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	if ($act=='add'){
		//include ("view/view_add_lecture.php");
		$lecture->add_topic();	
		include ("view/view_add_student.php");
	}
	else{
		$lecture->view_list_topic();
	}	
	ob_end_flush();
?>