<!DOCTYPE html>
<html lang="en">
<head>

	 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Include header.php -->
    <?php include 'common/header.php'; ?>
    <style>
        /* Additional CSS styles */
        .blue-border {
            border-bottom: 3px solid #007BFF;
        }
    </style>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Kolkata');
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
    $sql = "SELECT role_name, role_status, entry_by, entry_date, update_by, update_date FROM role_master ORDER BY entry_date DESC, update_date DESC";
    $result = $conn->query($sql);
    $rows = []; // Initialize an empty array to store fetched rows
    if ($result->num_rows > 0) {
        // Fetch data as an associative array
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="m-0">Role Master</h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="role_add.php" class="btn btn-primary">Role Add</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-primary m-3 mb-1">
        <div class="card-header">
            <h1 class="card-title">Search Panel</h1>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-bs-toggle="collapse" data-bs-target="#searchPanel" onclick="toggleIcon(this)">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="collapse" id="searchPanel">
            <div class="card-body">
                <form id="searchForm">
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
                                    <option value="" disabled selected>Select</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-1">
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
                    <?php foreach ($rows as $row): ?>
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
                            <td class="text-center"><?= $row['role_name'] ?></td>
                            <td class="text-center"><?= $row['role_status'] ?></td>
                            <td class="text-center"><?= date('d-m-Y h:i:s A', strtotime($row['update_date'] != '0000-00-00 00:00:00' ? $row['update_date'] : $row['entry_date'])) ?></td>
                            <td class="text-center"><?= $row['entry_by'] ?></td>
                            <td class="text-center"><?= $row['update_date'] != '0000-00-00 00:00:00' ? date('d-m-Y h:i:s A', strtotime($row['update_date'])) : '' ?></td>
                            <td class="text-center"><?= $row['update_by'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
