<?php
include 'common/header.php';
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-3 ">
            <div class="col ">
                <h1 class="card-title  " style="font-size: 2.3rem;">Role Add</h1>
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
                <form action="role_list.php" method="post">
                    <div class="row mb-3 border-bottom">
                        <div class="col-md-12">
                            <h4 class="card-outline text-grey mb-1 pb-2">Role Add</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleName1" class="text-grey">Role Name</label>
                                <input type="text" class="form-control" id="roleName1" name="roleName1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleDescription1" class="text-grey">Role Description</label>
                                <input type="text" class="form-control" id="roleDescription1" name="roleDescription1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleStatus" class="text-grey">Role Status</label>
                                <select class="form-control" id="roleStatus" name="roleStatus">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-1 border-top mt-4">
                        <div class="col-md-3 mt-3">
                            <button type="submit" class="btn btn-secondary mr-3">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
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