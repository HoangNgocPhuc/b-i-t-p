<?php
	/**
	* 
	*/
	class Controller
	{
		public $model;
		function __construct()
		{
			# code...
			$this->model = new model();
		}
	}
?>