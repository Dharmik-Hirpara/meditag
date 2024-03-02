<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Role</title>
    <!-- Include header.php -->
    <?php include 'common/header.php'; ?>
  </head>
  <body>
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row justify-content-between mb-2">
          <!-- Role Title -->
          <div class="col-md-6">
            <h1 class="m-0">Role</h1>
          </div>
          <!-- Role Add Button and Form -->
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="float: right; background-color: orange; color: black; border: none">
              <i class="fa fa-user"></i> Role add
            </button>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <!-- Role Form -->
                <form>
                  <style>
                    .form-group label {
                      text-align: left;
                      display: block;
                      width: 100%;
                    }
                  </style>
                  <!-- Role ID Field -->
                  <div class="form-group">
                    <label for="roleID">Role ID:</label>
                    <input type="text" class="form-control" id="roleID">
                  </div>
                  <!-- Role Name Field -->
                  <div class="form-group">
                    <label for="roleName">Role Name:</label>
                    <input type="text" class="form-control" id="roleName">
                  </div>
                  <!-- Role Description Field -->
                  <div class="form-group">
                    <label for="roleDescription">Role Description:</label>
                    <input type="text" class="form-control" id="roleDescription">
                  </div>
                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Section -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"></div>
      </div>
    </section>
    <!-- Include footer.php -->
    <?php include 'common/footer.php'; ?>
  </body>
</html>
