<?php 
	/**
	* 
	*/
	class Add_lecture extends Controller
	{
		function __construct(){
			parent::__construct();
		}
		// view list lecture
		public function view_list_lecture()
		{
			# code...
			$arr = $this->model->fetch("select * from teacher");
			include ("view/view_lecture.php");
		}

		//add 1 lecture
		public function add_lecture()
		{
			# code...
			if ($_SERVER["REQUEST_METHOD"]=="POST"){
				$code_lecture = isset($_POST["code_lecture"]) ? $_POST["code_lecture"]:"";

				$pass = md5($code_lecture);

				$name = isset($_POST["name"]) ? $_POST["name"]:"";

				$faculty = isset($_POST["faculty"]) ? $_POST["faculty"]:"";

				$email = isset($_POST["email"]) ? $_POST["email"]:"";
				$arr = $this->model->fetch("select * from teacher");
				if ( $this->model->num_rows("select * from teacher where pk_code_teacher_id='$code_lecture'")>0 ){
					echo "<script>alert('Mã code đã có')</script>";
				}
				else{
					$this->model->execute("insert into teacher(pk_code_teacher_id,name,password,major,mail) VALUES('$code_lecture','$name','$pass','$faculty','$email')");
					include ("controller/controller_faculty_upload_excel.php");
					$a->send_mail($code_lecture,$code_lecture,$email);
					
					flush();
					ob_start();
					header("location:index.php?controller=lecture");
					die;
					ob_end_flush();
				}
			}
		}
	}
	$lecture = new Add_lecture();
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	if ($act!=""){
		//include ("view/view_add_lecture.php");
		$lecture->add_lecture();	
		include ("view/view_add_lecture.php");
	}
	else{
		$lecture->view_list_lecture();
	}	
?>