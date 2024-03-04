<?php
include 'common/header.php';
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-100">
            <div>
                <h1 class="card-title">Role Add</h1>
            </div>
            <hr class=col-12>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right ">
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <div class="border border-3 p-3 w-100 shadow p-3 mb-5 bg-body rounded  " style="height:57vh;border-top: 8px solid blue">
                <form action="role_list.php" method="post">
                    <div class="row">
                       
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleName1">Role Name</label>
                                <input type="text" class="form-control" id="roleName1"name="roleName1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleDescription1">Role Description</label>
                                <input type="text" class="form-control" id="roleDescription1" name="roleDescription1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roleStatus">Role Status</label>
                                <select class="form-control" id="roleStatus" name="roleStatus">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary" style="margin-left:3px; background-color: light blue; 
                            border: none; color: white; padding: 12px 16px 12px 16px; text-align: left; font-size: 16px; position: relative; top: 160px;">Submit</button>
                         
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary" style="margin-right:2px; background-color: grey; 
                            border: none; color: white; padding: 12px 16px 12px 16px; text-align: lefts; font-size: 16px; position: relative; top: 160px;">cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add more form fields as needed -->
    </div>
    </div>
</section>

<?php
include 'common/footer.php';
?>