<?php
	/**
	* 
	*/
	class Research_on extends Controller
	{
		function __construct()
		{
			# code...
			parent::__construct();
			if (isset($_POST["save"])){
				$research_on = isset($_POST["research_on"]) ? $_POST["research_on"]:"";
				$check = isset($_POST["check"]) ? $_POST["check"]:0;
				$field_relate = "";
				for ($i=0; $i < count($check); $i++) { 
					# code...
					switch ($check[$i]) {
						case 1:
							# code...
							$field_relate .= "Cấu trúc cây. ";
							break;
						
						case 2:
							# code...
							$field_relate .= "Tham khảo cách phân loại của ACM";
							break;
						default:
							# code...
							break;
					}
				}
				$key = $_SESSION["c_username"];
				$this->model->execute("update teacher set research_on='$research_on', field_relate='$field_relate' where pk_code_teacher_id='$key' ");
				header("location:index.php");
			}
			$arr = $this->getResearchOn();
			include('view/view_research_on.php');
		}


		//hàm lấy các giá trị chủ đề nghiên cứu và lĩnh vực liên quan
		public function getResearchOn()
		{
			# code...
			$key = $_SESSION["c_username"];
			$arr = $this->model->fetch_one("select research_on,field_relate from teacher where pk_code_teacher_id='$key'");
			return $arr;
		}
	}
	if (isset($_SESSION["teacher"]))
		$ob = new Research_on();
?>