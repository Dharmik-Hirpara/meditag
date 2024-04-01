<?php
// Check if the delete role ID is set in the POST request
if(isset($_POST['delete_role_id'])) {
    // Database connection
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

    // Retrieve the role ID to be deleted
    $role_id = $_POST['delete_role_id'];

    // Prepare and execute the SQL query to delete the record
    $sql = "DELETE FROM role_master WHERE role_id = $role_id";
    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();
        // Redirect back to the role_list.php page
        header("Location: http://localhost/meditag/admin/role_list.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // If the delete role ID is not set, redirect back to the role_list.php page
    header("Location: http://localhost/meditag/admin/role_list.php");
    exit();
}
?>
