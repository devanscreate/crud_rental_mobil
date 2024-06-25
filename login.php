<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-5">
				<div class="card-header bg-primary text-white">Login</div>
				<div class="card-body">
					<form action="proses_login.php" method="POST">
						<label>Username</label>
						<input type="text" name="username" class="form-control" id="" placeholder="Masukkan username"><br>
						<label>Password</label>
						<input type="password" name="password" class="form-control" id="" placeholder="Masukkan password"><br>
						<input type="submit" value="login" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>