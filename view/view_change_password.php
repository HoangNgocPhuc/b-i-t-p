<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="col-md-6 col-md-offset-3">
	<form method="post" action="">
		<div class="panel panel-primary">
			<div class="panel-heading">Change password</div>
			<div class="panel-body">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Old password</div>
					<div class="col-md-9">
						<input type="password" name="old_password" required class="form-control">
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">New password</div>
					<div class="col-md-9">
						<input type="password" name="new_password" required class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<input type="submit" name="btnChange" value="Change" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
			</div>
		</div>
	</form>
	</div>

</body>
</html>