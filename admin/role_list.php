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
<h3 class="card-title">Bordered Table</h3>
</div>

<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Task</th>
<th>Progress</th>
<th style="width: 40px">Label</th>
</tr>
</thead>
<tbody>
<tr>
<td>1.</td>
<td>Update software</td>
<td>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
</div>
</td>
<td><span class="badge bg-danger">55%</span></td>
</tr>
<tr>
<td>2.</td>
<td>Clean database</td>
<td>
<div class="progress progress-xs">
<div class="progress-bar bg-warning" style="width: 70%"></div>
</div>
</td>
<td><span class="badge bg-warning">70%</span></td>
</tr>
<tr>
<td>3.</td>
<td>Cron job running</td>
<td>

</td>
<td><span class="badge bg-success">90%</span></td>
</tr>
</tbody>
</table>
</div>

<div class="card-footer clearfix">

</ul>
</div>
</div>
        </table>
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