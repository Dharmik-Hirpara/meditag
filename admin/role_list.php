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
  <div class="content-header">
    <div class="container-fluid">
      <div class="row justify-content-between mb-2">
        <!-- Role Title -->
        <div class="col-md-6">
          <h1 class="m-0">Role Master</h1>
        </div>
        <!-- Role Add Button and Form -->
        <div class="col-md-6 text-right">
          <a href="role_add.php">
            <button class="btn btn-primary" style="float: right; background-color: light-blue; color: white; border: none ">
              <i class="fa fa-user"></i> Role add
            </button>
          </a>
          <!-- Rest of your code -->

        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h1 class="card-title">Search Panel</h1>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>

    </div>

    <div class="card-body" style="display: block;">
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="roleNumberInput">Role Id</label>
              <input type="number" class="form-control" id="roleNumberInput" placeholder="Enter Id">

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="roleNameInput">Role Name</label>
              <input type="Name" class="form-control" id="roleNameInput" placeholder="Enter Name">
            </div>
          </div>
        </div>
    </div>


    <div class="card-footer" style="display: block;">
      <div class="row">
        <div class="col-md-3 mt-3">
          <input type="reset" value="Reset" class="btn btn-primary" background colour-grey;>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
    </form>
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
<script>
</script>

</html>