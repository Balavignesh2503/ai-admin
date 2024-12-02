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

        <!-- Sidebar -->
        <?php
        include('./nav.php');
        ?>

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <?php
                        include('./message.php');
                        ?>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Student</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">
                                <div class="mb-2">
                                    <?php
                                    include('./db.php');
                                    // include('./ListCourse.php');
                                    if (isset($_GET['sid'])) {
                                        $student_id = mysqli_real_escape_string($db, $_GET['sid']);
                                        $query = "select * from addstudent where cid='$student_id'";
                                        $execute = mysqli_query($db, $query);

                                        if (mysqli_num_rows($execute) > 0) {
                                            $student = mysqli_fetch_array($execute);
                                            //    print_r($course);
                                    ?><br>
                                            <input type="hidden" class="form-control" value="<?= $student['cid']; ?>" name="cid" id="exampleFormControlInput1" placeholder="Enter the Course name">
                                            <label for="exampleFormControlInput1" class="form-label">Course Name:</label>
                                            <input type="text" class="form-control" value="<?= $student['course_name']; ?>" name="coursename" id="exampleFormControlInput1" placeholder="Enter the Course name">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Course Fees:</label>
                                    <input type="text" class="form-control" value="<?= $course['course_fees']; ?>" name="coursefees" id="exampleFormControlInput1" placeholder="Enter the Course fees">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Course Duration:</label>
                                    <input type="text" class="form-control" value="<?= $course['course_duration']; ?>" name="courseduration" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Course Syllabus:</label>
                                    <!--<textarea class="form-control" name="coursesyllabus"  id="exampleFormControlTextarea1" rows="3"></textarea>-->
                                    <input type="text" class="form-control" value="<?= $course['course_syllabus']; ?>" name="coursesyllabus">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Category:</label>
                                    <input class="form-control" type="text" value="<?= $course['category']; ?>" name="category">
                                    <!-- <option value="Internship">Internship</option>
                                        <option value="Certificate Course">certificate course</option>
                                        <option value="Project">project</option> -->
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Course status:</label>
                                    <input class="form-control" value="<?= $course['status']; ?>" name="status" />
                                </div>
                                <div class="mb-2">
                                    <button type="submit" name="edit" class="btn btn-dark">Update Course</button>
                                    <?php
                                            include('./db.php');
                                            // session_start();
                                            if (isset($_POST['edit'])) {
                                                if (isset($_POST['cid'])) {
                                                    $course_id = mysqli_real_escape_string($db, $_POST['cid']);
                                                    //$course_id = mysqli_real_escape_string($db, $_POST['cid']);
                                                    $coursename = mysqli_real_escape_string($db, $_POST['coursename']);
                                                    $coursefees = mysqli_real_escape_string($db, $_POST['coursefees']);
                                                    $courseduration = mysqli_real_escape_string($db, $_POST['courseduration']);
                                                    $coursesyllabus = mysqli_real_escape_string($db, $_POST['coursesyllabus']);
                                                    $category = mysqli_real_escape_string($db, $_POST['category']);
                                                    $status = mysqli_real_escape_string($db, $_POST['status']);

                                                    $query = "update addcourse set course_name='$coursename',course_fees='$coursefees',course_duration='$courseduration',course_syllabus='$coursesyllabus',category='$category',status='$status' where cid='$course_id' ";
                                                    $ex = mysqli_query($db, $query);
                                                    if ($ex) {
                                                        // echo "Updated Successfully!!!";
                                                        $_SESSION['message'] = "Course Updated Successfuly!!!";
                                                        echo "<script>window.location.href='Listcourse.php'</script>";
                                                        exit(0);
                                                    } else {
                                                        // echo "Not Updated!!! ";
                                                        $_SESSION['message'] = "Course not Updated!!!";
                                                        // header("Loction:editcourse.php");
                                                        exit(0);
                                                    }
                                                }
                                            } else {
                                                // echo "cid is not set in POST data.";
                                            }
                                    ?>
                                    <button type="submit" name="delete" class="btn btn-dark">Delete Course</button>
                                    <?php
                                            include('./db.php');
                                            if (isset($_POST['delete'])) {
                                                $course_id = mysqli_real_escape_string($db, $_POST['cid']);
                                                $query = "DELETE from addcourse WHERE cid='$course_id'";
                                                $ex = mysqli_query($db, $query);
                                                if ($ex) {
                                                    $_SESSION['message'] = "Course Deleted Successfuly!!!";
                                                    echo "<script>window.location.href='Listcourse.php'</script>";
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
                            </form>
                    <?php

                                        } else {

                                            echo "<h4>No id found!!!</h4>";
                                        }
                                    }
                    ?>
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