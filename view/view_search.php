<div style=""><h2>Có <span style="color: red;"><?php echo $text!="" ? count($arr):"" ?></span> kết quả tìm kiếm với <span style="color: red"><?php echo $text ?></span> >></h2></div>
<?php
	if ($text!="" && count($arr)>0){
?>
	<table class="table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Họ tên</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      	<?php
      		$stt = 0;
      		foreach ($arr as $row) {
      			# code...
      	?>
      	<tr>
      		<td><?php echo ++$stt ?></td>
      		<td><span class="name" data-toggle="modal" href="<?php echo '#'.$row['pk_code_teacher_id'] ?>"><?php echo $row["name"] ?></span></td>
      		<td><button data-toggle="modal" href="<?php echo '#'.$row['pk_code_teacher_id'] ?>">Xem chi tiết</button></td>
      	</tr>
      	<?php } ?>
      </tbody>
    </table>
    <?php
    	foreach ($arr as $row) {
    		# code...
    ?>
    <div id="<?php echo $row['pk_code_teacher_id'] ?>" class="modal fade" style="margin-top: 200px;">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Chi tiết</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-4">Mã giảng viên</div>
	      		<div class="col-md-8"><?php echo $row["pk_code_teacher_id"] ?></div>
	      	</div>
	      	<div class="row">
	      		<div class="col-md-4">Họ tên</div>
	      		<div class="col-md-8"><?php echo $row["name"] ?></div>
	      	</div>
	      	<div class="row">
	      		<div class="col-md-4">Đơn vị</div>
	      		<div class="col-md-8"><?php echo $row["major"] ?></div>
	      	</div>
	      	<div class="row">
	      		<div class="col-md-4">Mail</div>
	      		<div class="col-md-8"><?php echo $row["mail"] ?></div>
	      	</div>
	      	<div class="row">
	      		<div class="col-md-4">Chủ đề nghiên cứu</div>
	      		<div class="col-md-8"><?php echo $row["research_on"] ?></div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<?php } ?>
<?php } ?>