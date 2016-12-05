<?php
  /**
  * 
  */
  class major extends Controller
  {
    
      function __construct()
      {
        # code...
        parent::__construct();
      }

      //get list lecture IT
      public function cntt()
      {
        # code...
        $arr_cntt = $this->model->fetch("select * from teacher where major like '%cntt%' ");
        return $arr_cntt;
      }

      //get list lecture DTVT
      public function dtvt()
      {
        # code...
        $arr_dtvt = $this->model->fetch("select * from teacher where major like '%đtvt%' ");
        return $arr_dtvt;
      }
  }

  $a = new major();
  $arr_cntt = $a->cntt();
  $arr_dtvt = $a->dtvt();
  include ('view/view_major.php');
?>