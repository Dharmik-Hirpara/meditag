<?php
include 'connect.php';
include 'common/header.php';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
// Assuming Connection_Lib class is defined in 'connect.php'
$Connection_Lib = new Connection_Lib();
$DB = $Connection_Lib->Connection();


    
    $errors = [];

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Client-side validation using HTML5 required attribute
        if (empty($Role_Name)) {
            $errors[] = "Role Name is required.";
        }

        if (empty($Role_Description)) {
            $errors[] = "Role Description is required.";
        }

        // Server-side validation
        if (empty($errors)) {
            // Insert query using prepared statement
            $insertQuery = "INSERT INTO role_master (Role_Name, Role_Description, Role_Status, is_delete,entry_by,entry_date) VALUES (?, ?, ?, ?,?,?)";
            $stmt = $DB->prepare($insertQuery);

			if ($stmt) {
				$stmt->bind_param("sssiss", $Role_Name, $Role_Description, $Role_Status,$is_delete,$entry_by,$entry_date);
			
				if ($stmt->execute()) {
					// Redirect to the role list page after successful submission
					// header('Location: role_list');
					echo '<script>window.location.href = "http://localhost/meditag/admin/role_list.php";</script>';

					exit();
					ob_end_flush();
				} else {
					echo "Error: " . $stmt->error;
				}
			
				$stmt->close();
			} else {
				echo "Error: " . $DB->error;
			}
			
        }
    }

?>

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-3 ">
			<div class="col ">
				<h1 class="card-title  " style="font-size: 2.3rem;">Role Edit</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right"></ol>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="border border-3 p-3 w-100 shadow p-3 mb-3 bg-body rounded card card-primary card-outline text-dark border-bottom pl-0 pr-0" style="border-top: 3px solid #007bff !important; margin-bottom: 0;">

				<form method="post" id="form_submit">
					<div class="row mb-3 border-bottom">
						<div class="col-md-12">
							<h4 class="card-outline text-grey mb-1 pb-2">Role </h4>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleName1" class="text-grey">Role Name</label>
								<input type="text" class="form-control" id="roleName" name="roleName" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleDescription1" class="text-grey">Role Description</label>
								<input type="text" class="form-control" id="roleDescription1" name="roleDescription1" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleStatus" class="text-grey">Role Status</label>
								<select class="form-control" id="roleStatus" name="roleStatus" required>
									<option value="" selected disabled>Select</option>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row mb-1 border-top mt-4">
						<div class="col-md-3 mt-3">
							<button type="button" class="btn btn-secondary mr-3" onclick="window.location.href='role_list.php'">Back</button>
							<button type="submit" name="role_add_btn" value="submit"     onclick="window.location.href='role_list.php'" class="btn btn-primary"  >Submit</button>
						</div>
					</div>

				</form>
			</div>

			<!-- Add more form fields as needed -->

		</div>
	</div>
</section>

<?php
include 'common/footer.php';
?>
<script>
	$('form').submit(function(){
   window.location.href='http://localhost/meditag/admin/role_list.php';
});
	
</script>