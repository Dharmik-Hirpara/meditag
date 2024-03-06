<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Role</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
          <a href="role_add.php" class="btn btn-primary">
            <i class="fa fa-user"></i> Role Add
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h1 class="card-title">Search Panel</h1>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-bs-toggle="collapse" data-bs-target="#searchPanel">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="collapse" id="searchPanel">
      <div class="card-body">
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
                <input type="text" class="form-control" id="roleNameInput" placeholder="Enter Name">
              </div>
            </div>
          </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-md-4 mt-1">
            <button type="reset" class="btn btn-dark me-2">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Entries</h3>
      </div>


      <div class="card-body">
        
        <table class="table table-bordered">
          <thead class="table-primary text-white">
            <tr>
              <th class="text-center">Action</th>
              <th class="text-center">Role ID</th>
              <th class="text-center">Status</th>
              <th class="text-center">Role Name</th>
              <th class="text-center">Entry Date</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-center">
                <div class="btn-group" role="group">
                  <div class="d-flex">
                    <button type="button" class="btn btn-warning btn-sm rounded flex-grow-1 mr-2">
                      <i class="fas fa-edit fa-xs"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm rounded flex-grow-1">
                      <i class="fas fa-trash-alt fa-xs"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="text-center"></td>
              <td class="text-center"></td>
              <td class="text-center"></td>
              <td class="text-center"></td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>



      <div class="card-footer clearfix">
      </div>
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
</body>

</html>