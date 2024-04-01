<?php
ob_start(); // Start output buffering

include 'connect.php';
include 'common/header.php';

$Connection_Lib = new Connection_Lib();
$DB = $Connection_Lib->Connection();

$errors = [];
$Role_Name = ''; // Initialize Role_Name variable
$Role_Description = ''; // Initialize Role_Description variable
$Role_Status = ''; // Initialize Role_Status variable

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have retrieved Role_ID from the form
    $Role_ID = isset($_POST['roleID']) ? $_POST['roleID'] : "";
    $Role_Name = isset($_POST['roleName']) ? $_POST['roleName'] : "";
    $Role_Description = isset($_POST['roleDescription1']) ? $_POST['roleDescription1'] : "";
    $Role_Status = isset($_POST['roleStatus']) ? $_POST['roleStatus'] : "";
    $update_by = 1;
    $update_date = date('Y-m-d H:i:s');

    // Client-side validation using HTML5 required attribute
    if (empty($Role_Name)) {
        $errors[] = "Role Name is required.";
    }

    if (empty($Role_Description)) {
        $errors[] = "Role Description is required.";
    }

    // Server-side validation
    if (empty($errors)) {
        // Update query using prepared statement
        $updateQuery = "UPDATE role_master SET Role_Name = ?, Role_Description = ?, Role_Status = ?, update_by = ?, update_date = ? WHERE Role_ID = ?";
        $stmt = $DB->prepare($updateQuery);

        if ($stmt) {
            $stmt->bind_param("sssisi", $Role_Name, $Role_Description, $Role_Status, $update_by, $update_date, $Role_ID);
            
            if ($stmt->execute()) {
                // Redirect to the role list page after successful update
                header('Location: role_list.php');
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            
            $stmt->close();
        } else {
            echo "Error: " . $DB->error;
        }
    }
} else {
    // Check if Role_ID is provided in the URL for editing
    if (isset($_GET['id'])) {
        $Role_ID = $_GET['id'];

        // Fetch the existing record from the database
        $selectQuery = "SELECT * FROM role_master WHERE Role_ID = ?";
        $stmt = $DB->prepare($selectQuery);

        if ($stmt) {
            $stmt->bind_param("i", $Role_ID);
            $stmt->execute();
            $result = $stmt->get_result();

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				// Check if $row is not empty and contains the expected keys
				if (!empty($row) && isset($row['Role_Name']) && isset($row['Role_Description']) && isset($row['Role_Status'])) {
					// Assign fetched values to variables to populate the form fields
					$Role_Name = $row['Role_Name'];
					$Role_Description = $row['Role_Description'];
					$Role_Status = $row['Role_Status'];
				} else {
					echo "";
				}
			} else {
				// No record found with the provided Role_ID
				echo "No record found with the provided ID.";
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

				<form method="post" id=" form_submit">
                    <!-- Include a hidden input field to store Role_ID -->
                    <input type="hidden" name="roleID" value="<?php echo $Role_ID; ?>">
					<div class="row mb-3 border-bottom">
						<div class="col-md-12">
							<h4 class="card-outline text-grey mb-1 pb-2">Role </h4>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleName1" class="text-grey">Role Name</label>
								<input type="text" class="form-control" id="roleName" name="roleName" value="<?php echo $Role_Name; ?>" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleDescription1" class="text-grey">Role Description</label>
								<input type="text" class="form-control" id="roleDescription1" name="roleDescription1" value="<?php echo $Role_Description; ?>" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="roleStatus" class="text-grey">Role Status</label>
								<select class="form-control" id="roleStatus" name="roleStatus" required>
									<option value="" selected disabled>Select</option>
									<option value="1" <?php if ($Role_Status == '1') echo 'selected'; ?>>Active</option>
									<option value="0" <?php if ($Role_Status == '0') echo 'selected'; ?>>Inactive</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row mb-1 border-top mt-4">
						<div class="col-md-3 mt-3">
							<button type="button" class="btn btn-secondary mr-3" onclick="window.location.href='role_list.php'">Back</button>
							<button type="submit" name="role_edit_btn" value="submit" class="btn btn-primary">Submit</button>
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
