<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
	</style>
</head>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title text-center" style="font-weight: bold">Admin Login</h2>
						<div class="text-center mb-1">
							<img src="https://is4-ssl.mzstatic.com/image/thumb/Purple124/v4/b9/87/f9/b987f9eb-eb84-4adb-67c2-62791a64baf5/source/512x512bb.jpg" width="50" height="50" class="img-fluid">

						</div>
						<form action="http://localhost/meditag/admin/role_list.php" method="POST">
							<div class="mb-3">
								<label for="username" class="form-label">Admin Name</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>

							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
							<button type="submit" class="btn btn-success">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>