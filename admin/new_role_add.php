<?php
    include 'common/header.php';
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Role Add</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Role Form -->
            <form action="role_list.php" method="post">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="roleID1">Role ID:</label>
                            <input type="text" class="form-control" id="roleID1" name="roleID1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="roleName1">Role Name:</label>
                            <input type="text" class="form-control" id="roleName1" name="roleName1" required oninvalid="this.setCustomValidity('Please enter your name')" oninput="this.setCustomValidity('')" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="roleDescription1">Role Description:</label>
                            <input type="text" class="form-control" id="roleDescription1" name="roleDescription1">
                        </div>
                    </div>
                    <style>
                        .form-group {
                         margin-bottom: 40px; /* Adjust as needed */
                         margin-left: 25px; /* Adjust as needed */
                         margin-right: 25px;}
                    </style>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="roleStatus">Role Status:</label>
                            <select class="form-control" id="roleStatus" name="roleStatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
               
            </form>
                </div>
                
                <!-- Add more form fields as needed -->
                <button type="submit" class="btn btn-primary " style = "margin-left:20px "> Submit</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </form>
        </div>
    </div>
</section>

<?php
    include 'common/footer.php';
?>
