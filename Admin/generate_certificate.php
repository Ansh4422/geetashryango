<?php
// Database connection
include('conn.php');

// Update certificate status if form is submitted
if (isset($_POST['update_status'])) {
    $volunteer_id = $_POST['volunteer_id'];
    $new_status = $_POST['status'];

    $query = "UPDATE volunteers SET certificate_status = '$new_status' WHERE id = $volunteer_id";
    mysqli_query($conn, $query);

    header('Location: manage_certificates.php');
    exit();
}

// Filter by status if selected
$status_filter = isset($_GET['status_filter']) ? $_GET['status_filter'] : '';

// Fetch all volunteers
$query = "SELECT * FROM volunteers";
if ($status_filter) {
    $query .= " WHERE certificate_status = '$status_filter'";
}
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include("navbar.php");
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="container-fluid p-4">
                <h2>Manage Certificates</h2>

                <div class="container my-3 p-2">
                    <!-- Filter Form -->
                    <label for="status_filter">Filter by Certificate Status:</label>
                    <form method="GET" class="d-flex">
                        <select name="status_filter" id="status_filter" class="form-control col-md-4 mx-4">
                            <option value="" <?php if ($status_filter == '') echo 'selected'; ?>>All</option>
                            <option value="Pending" <?php if ($status_filter == 'Pending') echo 'selected'; ?>>Pending</option>
                            <option value="Approved" <?php if ($status_filter == 'Approved') echo 'selected'; ?>>Approved</option>
                            <option value="Disabled" <?php if ($status_filter == 'Disabled') echo 'selected'; ?>>Disabled</option>
                            <option value="Rejected" <?php if ($status_filter == 'Rejected') echo 'selected'; ?>>Rejected</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Apply Filter</button>
                    </form>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Certificate Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['certificate_status']; ?></td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="volunteer_id" value="<?php echo $row['id']; ?>">
                                        <select name="status">
                                            <option value="Pending" <?php if ($row['certificate_status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                                            <option value="Approved" <?php if ($row['certificate_status'] == 'Approved') echo 'selected'; ?>>Approved</option>
                                            <option value="Disabled" <?php if ($row['certificate_status'] == 'Disabled') echo 'selected'; ?>>Disabled</option>
                                            <option value="Rejected" <?php if ($row['certificate_status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
                                        </select>
                                        <button type="submit" class="btn btn-success" name="update_status">Update</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Geetashray NGO</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>