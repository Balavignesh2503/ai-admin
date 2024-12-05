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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Degree</h1>
                        <div class="text-end">
                            <button class="btn btn-primary" type="button">
                                <a href="addDegree.php" style="text-decoration: none;color:white;">Add Degree</a>
                            </button>
                        </div>
                        <!-- <a href="generate_pdf.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <?php
                    include('./db.php');
                    $se = "SELECT * FROM adddegree";
                    $ex = mysqli_query($db, $se);
                    // if ($ex->num_rows > 0) {
                    //     // Output data of each row
                    //     while ($row = $ex->fetch_assoc()) {
                    //         echo "Course Name: " . $row["course name"] . "<br>" . "Course Fees: " . $row["course fees"] . "<br>" . "Course Duration: ". $row["course duration"] . "<br>" ."Course Syllabus:".$row["course syllabus"]."<br>"."Category:".$row["category"]."<br>"."Course Status:".$row["status"]. "<hr>";
                    //     }
                    // } else {
                    //     echo "0 results";
                    // }
                    ?>

                    <div class="card shadow mb-4">
                        <?php
                        include('./message.php');
                        ?>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Degree</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Degree name</th>
                                        <!-- <th>Course Fees</th>
                                        <th>Course Duration</th>
                                        <th>Course Syllabus</th>
                                        <th>Category</th> -->
                                        <!-- <th>Course Status</th> -->
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($ex)) { ?>
                                        <tr id='tr'>
                                            <td id='degree_id'><?php echo $row['id'] ?></td>
                                            <td id='degree-name'><?php echo $row['degreename'] ?></td>
                                            <td class="d-flex justify-content-around ">
                                                <a href="editdegree.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-pen" style="color: #ffffff;"></i> Edit</a>
                                                <form action="editdegree.php" method="POST">
                                                    <a href="editdegree.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" name="delete"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <script>
                                    // function filterByCourseName() {
                                    //     // Get the search input value and convert it to uppercase for case-insensitive search
                                    //     var input = document.getElementById("searchInput");
                                    //     var filter = input.value.toUpperCase();

                                    //     // Get the table and all the rows inside it
                                    //     var table = document.getElementById("dataTable");
                                    //     var tr = table.getElementsByTagName("tr");

                                    //     // Loop through all table rows (starting from 1 to skip the header)
                                    //     for (var i = 1; i < tr.length; i++) {
                                    //         // Get the course name cell in the current row
                                    //         var td = tr[i].getElementsByTagName("td")[1]; // Course Name is in the second <td>
                                    //         var coursePriceCell = tr[i].getElementsByTagName("td")[2]; 

                                    //         if (td) {
                                    //             // Get the text content of the cell
                                    //             var txtValue = td.textContent || td.innerText;
                                    //             var coursePrice = coursePriceCell.textContent || coursePriceCell.innerText;

                                    //             // Check if the course name matches the search query
                                    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    //                 tr[i].style.display = ""; // Show the row if it matches
                                    //                 console.log("Course Price: " + coursePrice);
                                    //             } else {
                                    //                 tr[i].style.display = "none"; // Hide the row if it doesn't match
                                    //             }
                                    //         }
                                    //     }
                                    // }
                                </script>
                                <script>
                                    function filterTable() {
                                        // Get the search input value and convert it to uppercase for case-insensitive search
                                        var input = document.getElementById("searchInput");
                                        var filter = input.value.toUpperCase();

                                        // Get the table and all the rows inside it
                                        var table = document.getElementById("dataTable");
                                        var tr = table.getElementsByTagName("tr");

                                        // Loop through all table rows (starting from 1 to skip the header)
                                        for (var i = 1; i < tr.length; i++) {
                                            // Assume initially that no cell matches the filter
                                            var rowHasMatch = false;

                                            // Get all the <td> elements in the current row
                                            var td = tr[i].getElementsByTagName("td");

                                            // Loop through all the cells in this row
                                            for (var j = 0; j < td.length; j++) {
                                                if (td[j]) {
                                                    // Get the text content of the cell
                                                    var txtValue = td[j].textContent || td[j].innerText;

                                                    // Check if the text in this cell matches the search query
                                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                        rowHasMatch = true; // A match was found in this row
                                                        break; // No need to check other cells in this row
                                                    }
                                                }
                                            }

                                            // Show the row if a match was found, otherwise hide it
                                            tr[i].style.display = rowHasMatch ? "" : "none";
                                        }
                                    }
                                </script>

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