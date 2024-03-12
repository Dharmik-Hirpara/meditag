<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Role</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<!-- Include Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<!-- Include header.php -->
	<?php include 'common/header.php'; ?>
	<style>
		/* Additional CSS styles */
		.blue-border {
			border-bottom: 3px solid #007BFF;
			/* Blue border color */
		}
	</style>
</head>

<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meditag";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT role_name, role_status, entry_by FROM role_master";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Fetch data as an associative array
    while ($row = $result->fetch_assoc()) {
        // Access individual columns using keys

        $data['roleName'] = $row['role_name'];
        $data['roleStatus'] = $row['role_status'];
        $data['entryBy'] = $row['entry_by'];

        // Process or display the data as needed
        
    }
}

	// print_r();
// die();
?>
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<!-- Role Title -->
				<div class="col-md-6">
					<h1 class="m-0">Role Master</h1>
				</div>
				<!-- Role Add Button and Form -->
				<div class="col-md-6 text-md-end">
					<a href="role_add.php" class="btn btn-primary">
						Role Add
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card card-outline card-primary m-3 mb-1 ">
		<div class="card-header">
			<h1 class="card-title">Search Panel</h1>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-bs-toggle="collapse" data-bs-target="#searchPanel" onclick="toggleIcon(this)">
					<i class="fas fa-plus"></i>
				</button>
				<script>
					function toggleIcon(element) {
						var icon = element.querySelector('i');
						icon.classList.toggle('fa-plus');
						icon.classList.toggle('fa-minus');
					}
				</script>
			</div>
		</div>

		<div class="collapse" id="searchPanel">
			<div class="card-body">
				<!-- Add the form tag with an ID -->
				<form id="searchForm">
					<div class="row">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="roleNameInput">Role Name</label>
									<input type="text" class="form-control" id="roleNameInput" name="roleNameInput" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="statusInput">Status</label>
									<select class="form-control" id="statusInput" name="statusInput">
										<option value="" disabled selected>Select</option> <!-- Placeholder option -->
										<option value="active">Active</option>
										<option value="inactive">Inactive</option>
									</select>
								</div>
							</div>


							<div class="col-md-3">
								<div class="form-group mt-4"> <!-- Adjusted margin-top for alignment -->

								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 mt-1">
							<!-- Change type to "button" to prevent form submission -->
							<button type="button" class="btn btn-dark me-2" onclick="resetForm()">Reset</button>
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</form>
			</div>

			<div>
				<!-- Pagination -->

			</div>
		</div>
	</div>

	<div class="card card-outline card-primary m-3">
		<div class="card-body p-0">
			<table class="table table-bordered m-0">
				<thead class="table-primary text-white">
					<tr>
						<th class="text-center">Action</th>
						<th class="text-center">Name</th>
						<th class="text-center">Status</th>
						<th class="text-center">Entry Date</th>
						<th class="text-center">Entry By</th>
						<th class="text-center">Update Date</th>
						<th class="text-center">Update By</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="text-center">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-warning btn-sm rounded flex-grow-1 mr-2">
									<i class="fas fa-edit fa-xs"></i>
								</button>
								<button type="button" class="btn btn-danger btn-sm rounded flex-grow-1">
									<i class="fas fa-trash-alt fa-xs"></i>
								</button>
							</div>
						</td>
						<td class="text-center"></td>
						<td class="text-center"><?php echo $data['roleName'];?></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>
					<!-- Add more rows as needed -->
					<tr>
						<td class="text-center">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-warning btn-sm rounded flex-grow-1 mr-2">
									<i class="fas fa-edit fa-xs"></i>
								</button>
								<button type="button" class="btn btn-danger btn-sm rounded flex-grow-1">
									<i class="fas fa-trash-alt fa-xs"></i>
								</button>
							</div>
						</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="card-footer clearfix ">
			<!-- Pagination -->
			<ul class="pagination pagination-sm m-0 float-right p-0">
				<li class="page-item"><a class="page-link" href="#">«</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">»</a></li>
			</ul>
		</div>
	</div>

	<!-- Content Section -->
	<section class="content">
		<div class="container-fluid">
			<div class="row"></div>
		</div>
	</section>

	<!-- Include Bootstrap JS and footer.php -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<?php include 'common/footer.php'; ?>

	<!-- Add the resetForm function -->
	<script>
		function resetForm() {
			// Reset the form by setting input values to an empty string
			document.getElementById('searchForm').reset();
		}
	</script>
</body>

</html>