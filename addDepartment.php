<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Anjana InfoTech</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <?php
        include('./db.php');
        ?>
        <!-- Sidebar -->
        <?php
        include('./nav.php');
        ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                include('./topbar.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <?php
                        include('./message.php');
                        ?>

                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $deptData = mysqli_fetch_assoc(mysqli_query($db, "select * from department where id='$id'"));
                        }
                        ?>

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Degree</h6>
                        </div>
                        <?php
                        $data = mysqli_query($db, "select * from adddegree");
                        ?>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Degree Name:</label>
                                    <select class="form-control" name="degree_id" id="degree_id">
                                        <option value="" selected disabled>Select</option>

                                        <?php
                                        if (isset($deptData['degree_id'])) { ?>
                                            <option value="<?php echo $deptData['degree_id'] ?>" selected>
                                                <?php
                                                $degree_name = mysqli_fetch_assoc(mysqli_query($db, "select * from adddegree where id='$deptData[degree_id]'"));
                                                echo $degree_name['degreename']
                                                ?>
                                            </option>
                                        <?php } ?>
                                        <?php
                                        $degree = mysqli_query($db, "select * from adddegree");
                                        foreach ($degree as $val) { ?>
                                            <option value="<?php echo $val['id'] ?>"><?php echo $val['degreename'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Department Name:</label>
                                    <input type="text" class="form-control" name="dptname" id="exampleFormControlInput1" placeholder="Enter the Department name" value="<?php echo isset($deptData['dptname']) ? $deptData['dptname'] : "" ?>">
                                </div>
                                <div class="mb-2">
                                    <?php if (isset($_GET['id'])) { ?>
                                        <button type="submit" name="update" class="btn btn-dark">Update Department</button>

                                    <?php } else { ?>
                                        <button type="submit" name="add" class="btn btn-dark">Add Department</button>
                                    <?php } ?>
                                    <?php if (isset($_GET['id'])) { ?>
                                        <button type="submit" name="delete" class="btn btn-dark">Delete Department</button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                include('./db.php');
                // session_start();
                if (isset($_POST['update'])) {
                    if (isset($_POST['degree_id'])) {
                        $degree_id = mysqli_real_escape_string($db, $_POST['degree_id']);
                        $dptname = mysqli_real_escape_string($db, $_POST['dptname']);
                        $query = "UPDATE department set dptname='$dptname' where id='$degree_id' ";
                        $ex = mysqli_query($db, $query);
                        if ($ex) {
                            // echo "Updated Successfully!!!";
                            $_SESSION['message'] = "Department Updated Successfuly!!!";
                            echo "<script>window.location.href='department.php'</script>";
                        } else {
                            // echo "Not Updated!!! ";
                            $_SESSION['message'] = "Department not Updated!!!";
                            // header("Loction:editcourse.php");
                            exit(0);
                        }
                    }
                } else {
                    // echo "cid is not set in POST data.";
                }
                ?>
                <!-- /.container-fluid -->
                <?php
                include('./db.php');
                if (isset($_POST['delete'])) {
                    $degree_id = mysqli_real_escape_string($db, $_POST['degree_id']);
                    $query = "DELETE from department WHERE id='$degree_id'";
                    $ex = mysqli_query($db, $query);
                    if ($ex) {
                        $_SESSION['message'] = "Department Deleted Successfuly!!!";
                        echo "<script>window.location.href='department.php'</script>";
                        exit(0);
                    } else {
                        $_SESSION['message'] = "Course not Updated!!!";
                        exit(0);
                    }
                } else {
                    // echo "cid is not set in POST data.";
                }
                ?>
            </div>
            <?php
            include('./db.php');
            if (isset($_POST['add'])) {
                $degree_id = $_POST['degree_id'];
                $dptname = $_POST['dptname'];
                $in = "insert into department(degree_id, dptname) values('$degree_id','$dptname')";
                $ex = mysqli_query($db, $in);
                if ($ex) {
                    //echo "<script>window.location.href='addcourse.php'</script>";
                    $_SESSION['message'] = "Department added Successfuly!!!";
                    // header("Loction:addcourse.php");
                    echo "<script>window.location.href='./department.php'</script>";
                    exit(0);
                } else {
                    $_SESSION['message'] = "Department added not Successfuly!!!";
                    header("Loction:addDepartment.php");
                    exit(0);
                }
            }
            ?>

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Anjana InfoTech</span>
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