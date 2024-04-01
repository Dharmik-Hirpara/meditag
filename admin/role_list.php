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
    // Pagination settings
    $items_per_page = 10; // Number of records to display per page
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Get the current page from the URL parameter, cast it to an integer
    $offset = ($current_page - 1) * $items_per_page; // Calculate the offset for the database query
    // Modify the SQL query to add the LIMIT clause for pagination
    $sql = "SELECT role_id, role_name, role_status, entry_by, entry_date, update_by, IF(update_date = '0000-00-00 00:00:00', NULL, update_date) AS update_date FROM role_master LIMIT $offset, $items_per_page";
    $result = $conn->query($sql);
    // Initialize rows array
    $rows = [];
    if ($result->num_rows > 0) {
        // Fetch data as an associative array
        while ($row = $result->fetch_assoc()) {
            // Convert entry date to Asia/Kolkata timezone and format in 12-hour format
            $entry_date = new DateTime($row['entry_date']);
            $entry_date->setTimezone(new DateTimeZone('Asia/Kolkata'));
            $row['entry_date'] = $entry_date->format('Y-m-d h:i:s A');
            $rows[] = $row;
        }
    }
    // Get the total number of records
    $total_records_query = $conn->query("SELECT COUNT(*) as total FROM role_master");
    $total_records_data = $total_records_query->fetch_assoc();
    $total_records = $total_records_data['total'];
    $total_pages = ceil($total_records / $items_per_page);
    ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Role Title -->
                <div class="col-md-6">
                    <h1 class="m-0">Role Master</h1>
                </div>
                <!-- Role Add Button and Logout -->
                <div class="col-md-6 text-md-end">
                    <a href="role_add.php" class="btn btn-primary">
                        Role Add
                    </a>
                    <a href="http://localhost/meditag/admin/login.php" class="btn btn-danger">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
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
                    <?php
                    // Loop through the paginated rows to display each row
                    foreach ($rows as $row) {
                    ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="http://localhost/meditag/admin/role_edit.php?id=<?php echo $row['role_id']; ?>">
                                        <button type="button" class="btn btn-warning btn-sm rounded flex-grow-1 mr-2" data-bs-toggle="modal" data-bs-target="#editModal" data-role-id="<?php echo $row['role_id']; ?>" data-role-name="<?php echo $row['role_name']; ?>" data-role-status="<?php echo $row['role_status']; ?>">
                                            <i class="fas fa-edit fa-xs"></i>
                                        </button>
                                    </a>
                                    <!-- Add the form for deleting the role -->
                                    <form method="post" action="delete_role.php">
                                        <input type="hidden" name="delete_role_id" value="<?php echo $row['role_id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm rounded flex-grow-1 mr-2">
                                            <i class="fas fa-trash fa-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class="text-center"><?php echo $row['role_name']; ?></td>
                            <td class="text-center"><?php echo $row['role_status']; ?></td>
                            <td class="text-center"><?php echo $row['entry_date']; ?></td>
                            <td class="text-center"><?php echo $row['entry_by']; ?></td>
                            <td class="text-center"><?php echo $row['update_date'] !== null ? $row['update_date'] : 'Not Updated'; ?></td>
                            <td class="text-center"><?php echo $row['update_by'] != '' ? $row['update_by'] : ''; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix ">
            <!-- Pagination -->
            <ul class="pagination pagination-sm m-0 float-right p-0">
                <?php if ($current_page > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page - 1; ?>">«</a></li>
                <?php } ?>
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
                <?php if ($current_page < $total_pages) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page + 1; ?>">»</a></li>
                <?php } ?>
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
    <script>
        function editRole(roleId) {
            // Redirect to role_edit.php with roleId as query parameter
            window.location.href = "http://localhost/meditag/admin/role_edit.php?role_id=" + role_id;
        }
    </script>
</body>
</html>
