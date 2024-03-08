<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Include header.php -->
    <?php include 'common/header.php'; ?>
</head>

<body>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Role Title -->
                <div class="col-md-6">
                    <h1 class="m-0">Role Master</h1>
                </div>
                <!-- Role Add Button and Form -->
                <div class="col-md-6 text-md-end">
                    <a href="role_add.php" class="btn btn-primary">
                        Role Add
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-outline card-primary m-3 mb-1 border-3"> <!-- Updated border-3 for a more bold border -->
        <div class="card-header">
            <h1 class="card-title">Search Panel</h1>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-bs-toggle="collapse" data-bs-target="#searchPanel"
                    onclick="toggleIcon(this)">
                    <i class="fas fa-plus"></i>
                </button>

                <script>
                    function toggleIcon(element) {
                        var icon = element.querySelector('i');
                        icon.classList.toggle('fa-plus');
                        icon.classList.toggle('fa-minus');
                    }
                </script>
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
                </form>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <button type="reset" class="btn btn-dark me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-outline card-primary m-3">
        <div class="card-body p-0">
            <table class="table table-bordered m-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th class="text-center">Action</th>
                        <th class="text-center"> Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Is Delete</th>
                        <th class="text-center">Entry Date</th>
                        <th class="text-center">Entry By</th>
                        <th class="text-center">Update Date</th>
                        <th class="text-center">Update By</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <button type="button"
                                    class="btn btn-warning btn-sm rounded flex-grow-1 mr-2">
                                    <i class="fas fa-edit fa-xs"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-danger btn-sm rounded flex-grow-1">
                                    <i class="fas fa-trash-alt fa-xs"></i>
                                </button>
                            </div>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    <!-- Add more rows as needed -->
                    <tr>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <button type="button"
                                    class="btn btn-warning btn-sm rounded flex-grow-1 mr-2">
                                    <i class="fas fa-edit fa-xs"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-danger btn-sm rounded flex-grow-1">
                                    <i class="fas fa-trash-alt fa-xs"></i>
                                </button>
                            </div>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ---------------------------------------------------- -->
        <div class="card-footer  py-2 border-primary border-bottom border-3"> <!-- Updated border-3 for a more bold border -->
            <!-- Pagination -->
            <ul class="pagination justify-content-end mt-0 mb-0 " style="font-size: 0.1rem;">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>

        <!-- ---------------------------------------------------------------- -->
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
