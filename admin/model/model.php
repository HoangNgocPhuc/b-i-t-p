<?php
	class model{
		//ham khoi tao
		public function __construct(){			
		}
		public function fetch($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
		public function execute($sql){
			global $con;
			mysqli_query($con,$sql);
		}
		//ham tra ve mot ban ghi
		public function fetch_one($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			return $row;
		}
		//dem so ban ghi
		public function num_rows($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			return mysqli_num_rows($result);
		}
	}
?>