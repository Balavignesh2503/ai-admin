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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                 <?php 
                 include('./db.php');
                 $query = "SELECT * FROM addstudent WHERE joindate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)";
                 $exe = mysqli_query($db,$query);              
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Current Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Students Name</th>
                                            <th>Students Course </th>
                                            <th>Student College</th>
                                            <th>Student Degree</th>
                                            <th>Student Department</th>
                                            <th>Join Date</th>
                                            <th>Student Phone</th>
                                            <th>Student Email</th>
                                            <th>Student Address</th>
                                            <th>Fees</th>
                                            <th>advance</th>
                                            <th>remaining</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($exe)) { ?>
                                        <tr>
                                            <td><?php echo $row['sid'] ?></td>
                                            <td><?php echo $row['studentname'] ?></td>
                                            <td><?php echo $row['studentcourse'] ?></td>
                                            <td><?php echo $row['studentcollege'] ?></td>
                                            <td><?php echo $row['studentdegree'] ?></td>
                                            <td><?php echo $row['department'] ?></td>
                                            <td><?php echo $row['joindate'] ?></td>
                                            <td><?php echo $row['studentphone'] ?></td>
                                            <td><?php echo $row['studentemail'] ?></td>
                                            <td><?php echo $row['studentaddress'] ?></td>
                                            <td><?php echo $row['fees'] ?></td>
                                            <td><?php echo $row['advance'] ?></td>
                                            <td><?php echo $row['remaining'] ?></td>

                                            <td>
                                                <a href="addstudent.php?sid=<?php echo $row['sid']; ?>" class="btn btn-info btn-sm" ><i class="fa-solid fa-pen" style="color: #ffffff;"></i>  Edit</a>
                                                <a href="addstudent.php?sid=<?php echo $row['sid']; ?>" class="btn btn-danger" name="delete"><i class="fa-solid fa-trash" style="color: #ffffff;"></i>  Delete</a>

                                            </td>
                                            
                                        </tr>    
                                        <?php } ?>                                    
                                    </tbody>
                                </table>
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