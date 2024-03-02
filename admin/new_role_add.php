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
                    <div class="col">
                        <div class="form-group">
                            <label for="roleID1">Role ID:</label>
                            <input type="text" class="form-control" id="roleID1" name="roleID1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="roleID2">Role ID:</label>
                            <input type="text" class="form-control" id="roleID2" name="roleID2">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="roleID2">Role ID:</label>
                            <input type="text" class="form-control" id="roleID2" name="roleID2">
                        </div>
                    </div>

                    
                </div>
                <!-- Add more form fields as needed -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php
    include 'common/footer.php';
?>
