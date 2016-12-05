<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
<div class="container" style="margin-top:20px;">
	<div class="col-md-4 col-xs-offset-4">
	<form method="post" action="">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<!-- row -->
				<div class="row">
					<div class="col-md-3">Username</div>
					<div class="col-md-9">
						<input type="text" name="c_username" required class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Password</div>
					<div class="col-md-9">
						<input type="password" name="c_password" required class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<input type="submit" name="btnLogin" value="Submit" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
			</div>
		</div>
	</form>
	</div>
</div>
</body>
</html>