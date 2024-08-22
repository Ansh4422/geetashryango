<?php

include("conn.php");

// Handle Add Volunteer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_volunteer'])) {


    function generateUniqueID($prefix = '') {
        // Generate a unique ID with a more readable format
        $uniqueID = uniqid($prefix, true); // Generate a unique ID with a prefix and more entropy
        $uniqueID = str_replace('.', '', $uniqueID); // Remove dots for readability
        $uniqueID = substr($uniqueID, -8); // Get the last 8 characters for brevity
    
        // Optionally, you can add a prefix to the ID
        return strtoupper($prefix . $uniqueID);
    }
    
    // Example usage:
    $vol_id = generateUniqueID('VOL-'); // Example prefix
   
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $joined_date = $conn->real_escape_string($_POST['joined_date']);
    $skills = $conn->real_escape_string($_POST['skills']);

    $conn->query("INSERT INTO volunteers (vol_id,name, email, phone, joined_date, skills) VALUES ('$vol_id','$name', '$email', '$phone', '$joined_date', '$skills')");
}

// Handle Delete Volunteer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_volunteer'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $conn->query("DELETE FROM volunteers WHERE id = $id");
}

// Fetch Volunteers
$result = $conn->query("SELECT * FROM volunteers ORDER BY created_at DESC");
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

            <div class="container mt-5">
                <h1 class="mb-4">Volunteers</h1>

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addVolunteerModal">
                    Add Volunteer
                </button>

                <!-- Volunteers Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Joined Date</th>
                            <th>Skills</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                         while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <th><?php echo $i ?></th>
                                <td><?php echo $row['vol_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['joined_date']; ?></td>
                                <td><?php echo $row['skills']; ?></td>
                                <td>
                                    <form method="POST" style="display:inline-block;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_volunteer" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        $i++; 
                    endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Add Volunteer Modal -->
            <div class="modal fade" id="addVolunteerModal" tabindex="-1" role="dialog" aria-labelledby="addVolunteerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addVolunteerModalLabel">Add Volunteer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="joined_date">Joined Date</label>
                                    <input type="date" class="form-control" name="joined_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <textarea class="form-control" name="skills" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="add_volunteer" class="btn btn-primary">Add Volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>
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