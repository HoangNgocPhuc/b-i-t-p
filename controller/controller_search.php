<?php
	/**
	* 
	*/
	class Search extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//return result
		public function search()
		{
			# code...
			$text = isset($_POST["content"]) ? $_POST["content"]:"";
			if ($text != "")
				$arr = $this->model->fetch("select * from teacher where name like '%$text%' or research_on like '%$text%'");
			include ('view/view_search.php');
		}
	}

	$a = new Search();
	$a->search();
?>