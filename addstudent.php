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

                <!-- Topbar -->
                <?php 
                include('./topbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <?php
                    include('./message.php');
                    ?>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student Name:</label>
                                    <input type="text" name="studentname" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Student name">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student's Course:</label>
                                    <input type="text" name="studentcourse" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Course">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Join Date</label>
                                    <input type="date" name="joindate" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Course">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Phone:</label>
                                    <input type="number" name="studentphone" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <!-- <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Course Syllabus</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> -->
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Email:</label>
                                    <input type="email" name="studentemail" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address:</label>
                                    <textarea class="form-control" name="studentaddress" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
    
                                <div class="mb-2">
                                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>




                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <?php
            include('./db.php');
            if(isset($_POST['add'])){
                $sid=0;
                $studentname=$_POST['studentname'];
                $studentcourse=$_POST['studentcourse'];
                $joindate=$_POST['joindate'];
                $studentphone=$_POST['studentphone'];
                $studentemail=$_POST['studentemail'];
                $studentaddress=$_POST['studentaddress'];
                $query = "insert into addstudent values('$sid','$studentname','$studentcourse','$joindate','$studentphone','$studentemail','$studentaddress')";
                $ex = mysqli_query($db, $query);
                if ($ex) {

                    //echo "<script>window.location.href='addcourse.php'</script>";
                    $_SESSION['message']="Course added Successfuly!!!";
                    header("Loction: addstudent.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['message']="Course added not Successfuly!!!";
                    header("Loction: addstudent.php");
                    exit(0);
                }
            }
                 
            ?>
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