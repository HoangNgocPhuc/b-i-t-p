<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Add a lecture</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Mã giảng viên</div>
					<div class="col-md-9"><input type="text" name="code_lecture" style="width:100%" required></div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Họ tên</div>
					<div class="col-md-9"><input type="text" name="name" style="width:100%" required></div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Đơn vị</div>
					<div class="col-md-9"><input type="text" name="faculty" style="width:100%" required></div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Email</div>
					<div class="col-md-9"><input type="email" name="email" style="width:100%" required></div>
				</div>
				<!-- end row --> 

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<input type="submit" value="Tạo" class="btn btn-primary">
						<input type="reset" value="Làm mới" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>