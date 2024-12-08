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
                    <?php
                        include('./db.php');
                        if (isset($_GET['sid'])) {
                            $sid = $_GET['sid'];
                            $studentdata = mysqli_fetch_assoc(mysqli_query($db, "select * from addstudent where sid='$sid'"));
                        }
                        ?>
                        <div class="card-header py-3">
                        <?php if (isset($_GET['sid'])){ ?>
                            <h6 class="m-0 font-weight-bold text-primary">Edit Student</h6>
                        <?php }else{?>
                        
                            <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                        <?php }?>
                        </div>
                        <div class="card-body">
                            <form method="post" onsubmit="validateForm(event)">
                            <?php if (isset($_GET['sid'])){ ?>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student Name:</label>
                                    <input type="text" name="studentname" value="<?php echo $studentdata['studentname']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Student name" required>
                                </div>
                                <?php }else{?>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student Name:</label>
                                    <input type="text" name="studentname" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Student name">
                                </div>
                                <?php }?>

                                <?php
                                include('./db.php');
                                $sql = "SELECT * FROM addcourse";
                                $data = $db->query($sql);
                                ?>
                                
                                <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Student's Course:</label>
                                <select onchange="getfees()" class="form-select" aria-label="Default select example" id="studentcourse" name="studentcourse">
                                    <?php if(isset($_GET['sid'])){?>                                    
                                    <option value="<?php echo $studentdata['studentcourse']?>" selected><?php echo $studentdata['studentcourse']?></option>
                                    <?php }else{?>
                                    <option value="" disabled selected>select</option>
                                    <?php }?>
                                    
                                    <?php foreach ($data as $course) { ?>
                                        <option  data-fees="<?php echo htmlspecialchars($course['course_fees']) ?>" value="<?php echo htmlspecialchars($course['cid']) ?>"><?php echo htmlspecialchars($course['course_name']) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM college";
                            $data = $db->query($sql);
                               
                            ?>
                                <div class="mb-2">
                                <label for="status" class="form-label">Student`s College:</label>
                                <select class="form-select" aria-label="Default select example" name="studentcollege" id="status">
                                <?php if(isset($_GET['sid'])){?>                                    
                                    <option value="<?php echo $studentdata['studentcollege']?>" selected><?php echo $studentdata['studentcollege']?></option>
                                    <?php }else{?>
                                    <option value="" disabled selected>select</option>
                                    <?php }?>
                                <?php foreach ($data as $clg) { ?>
                                        <option value="<?php echo htmlspecialchars($clg['id']) ?>"><?php echo htmlspecialchars($clg['collegename']) ?></option>
                                    <?php } ?>                               
                                </select>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM adddegree";
                            $data = $db->query($sql);
                               
                            ?>
                            <div class="mb-2">
                                <label for="degree" class="form-label">Degree :</label>
                                <select class="form-select" id="degree" name="studentdegree">
                                <?php if(isset($_GET['sid'])){?>                                    
                                    <option value="<?php echo $studentdata['studentdegree']?>" selected><?php echo $studentdata['studentdegree']?></option>
                                    <?php }else{?>
                                    <option value="" disabled selected>select</option>
                                    <?php }?>
                                    <?php foreach($data as $degree){?>
                                    <option value="<?php echo htmlspecialchars($degree['id'])?>"><?php echo htmlspecialchars($degree['degreename'])?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM department";
                            $data = $db->query($sql);
                            ?>

                            <div class="mb-2">
                                <label for="department" class="form-label">Department:</label>
                                <select class="form-select" id="department" name="department">
                                <?php if(isset($_GET['sid'])){?>                                    
                                    <option value="<?php echo $studentdata['department']?>" selected><?php echo $studentdata['department']?></option>
                                    <?php }else{?>
                                    <option value="" disabled selected>select</option>
                                    <?php }?>
                                    <?php foreach($data as $dept){?>
                                        <option value="<?php echo htmlspecialchars($dept['id'])?>"><?php echo htmlspecialchars($dept['dptname'])?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <?php if(isset($_GET['sid'])){?>                                    
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Join Date</label>
                                    <input type="date" name="joindate" value=<?php echo $studentdata['joindate']?> class="form-control" id="exampleFormControlInput1" placeholder="Enter the Course">
                                    </div>
                                    <?php }else{?>
                                    <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Join Date</label>
                                    <input type="date" name="joindate" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Course">
                                    </div>
                                    <?php }?>

                                
                                    <?php if(isset($_GET['sid'])){?>                                    
                                    <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Phone:</label>
                                    <input type="number" name="studentphone" value=<?php echo $studentdata['studentphone']?> class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <?php }else{?>
                                        <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Phone:</label>
                                    <input type="number" name="studentphone" class="form-control" id="exampleFormControlInput1">
                                 </div>
                                    <?php }?>
                                
                                <!-- <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Course Syllabus</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> -->
                                <?php if(isset($_GET['sid'])){?>                                    
                                    <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Email:</label>
                                    <input type="email" name="studentemail" value="<?php echo $studentdata['studentemail']?>" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <?php }else{?>
                                        <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Student`s Email:</label>
                                    <input type="email" name="studentemail" class="form-control" id="exampleFormControlInput1">
                                </div>
                                    <?php }?>

                                <?php if(isset($_GET['sid'])){?>                                    
                                    <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address:</label>
                                    <textarea class="form-control" name="studentaddress" id="exampleFormControlTextarea1" rows="3"><?php echo $studentdata['studentaddress']?></textarea>
                                </div>
                                    <?php }else{?>
                                        <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address:</label>
                                    <textarea class="form-control" name="studentaddress" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>  
                                    <?php }?>
                                    <?php if(isset($_POST['studentcourse'])){
                                        echo $_POST['studentcourse'];
                                    }
                                     ?>
                                     <?php if(isset($_GET['sid'])){?>

                                <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Fees</label>
                                <input type="text" value="<?php echo $studentdata['fees']?>" name="fees" id="fees" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Fees">
                            </div>
                            <?php }else{?>
                                <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Fees</label>
                                <input type="text" name="fees" id="fees" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Fees">
                            </div>
                            <?php }?>
                            <script>
                                function getfees(){
                                    var studentcourse = document.getElementById('studentcourse');
                                    var selectedcourse = studentcourse.options[studentcourse.selectedIndex];
                                    var fees = document.getElementById('fees');
                                    var fee = selectedcourse.getAttribute('data-fees');
                                    fees.value=fee ||''; 
                                }
                            </script>
                            <?php if(isset($_GET['sid'])){?>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Advance</label>
                                <input type="text" value="<?php echo $studentdata['advance']?>" name="advance" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Advance Amount">
                            </div>
                            <?php }else{?>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Advance</label>
                                <input type="text" name="advance" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Advance Amount">
                            </div>
                            <?php }?>
                            <script>
                                function validateForm(event) {
    // Prevent form submission
    event.preventDefault();

    // Get form fields
    const studentName = document.getElementById("exampleFormControlInput1").value.trim();
    const studentCourse = document.getElementById("studentcourse").value;
    const studentCollege = document.getElementById("status").value;
    const studentDegree = document.getElementById("degree").value;
    const department = document.getElementById("department").value;
    const joinDate = document.getElementsByName("joindate")[0].value;
    const phone = document.getElementsByName("studentphone")[0].value.trim();
    const email = document.getElementsByName("studentemail")[0].value.trim();
    const address = document.getElementsByName("studentaddress")[0].value.trim();
    const fees = document.getElementById("fees").value.trim();
    const advance = document.getElementsByName("advance")[0].value.trim();

    // Validation checks
    if (!studentName) {
        alert("Please enter the Student Name.");
        return false;
    }

    if (!studentCourse) {
        alert("Please select a Student Course.");
        return false;
    }

    if (!studentCollege) {
        alert("Please select a Student College.");
        return false;
    }

    if (!studentDegree) {
        alert("Please select a Degree.");
        return false;
    }

    if (!department) {
        alert("Please select a Department.");
        return false;
    }

    if (!joinDate) {
        alert("Please select a Join Date.");
        return false;
    }

    if (!phone || !/^\d{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
        alert("Please enter a valid Email.");
        return false;
    }

    if (!address) {
        alert("Please enter the Address.");
        return false;
    }

    if (!fees || isNaN(fees) || fees <= 0) {
        alert("Please enter a valid Fees amount.");
        return false;
    }

    if (!advance || isNaN(advance) || advance < 0) {
        alert("Please enter a valid Advance amount.");
        return false;
    }

    // If all validations pass, submit the form
    document.querySelector("form").submit();
}

                            </script>
    
                                <div class="mb-2">
                                <?php if(isset($_GET['sid'])){?>                                    
                                    <button type="submit" name="edit" class="btn btn-dark">Update Student</button>
                                    <?php
                                            include('./db.php');
                                            // session_start();
                                            if (isset($_POST['edit'])) {
                                                if (isset($_GET['sid'])) {
                                                    $sid=mysqli_real_escape_string($db,$_GET['sid']);
                                                    $studentname=mysqli_real_escape_string($db,$_POST['studentname']);
                                                    $studentcourse=mysqli_real_escape_string($db,$_POST['studentcourse']);
                                                    $studentcollege=mysqli_real_escape_string($db,$_POST['studentcollege']);
                                                    $studentdegree=mysqli_real_escape_string($db,$_POST['studentdegree']);
                                                    $department=mysqli_real_escape_string($db,$_POST['department']);
                                                    $joindate=mysqli_real_escape_string($db,$_POST['joindate']);
                                                    $studentphone=mysqli_real_escape_string($db,$_POST['studentphone']);
                                                    $studentemail=mysqli_real_escape_string($db,$_POST['studentemail']);
                                                    $studentaddress=mysqli_real_escape_string($db,$_POST['studentaddress']);
                                                    $fees=mysqli_real_escape_string($db,$_POST['fees']);
                                                    $advance=mysqli_real_escape_string($db,$_POST['advance']);
                                                    $remaining=$fees-$advance;
                                                   // print_r($sid);

                                                    $query = "update addstudent set studentname='$studentname',studentcourse='$studentcourse',studentcourse='$studentcourse',studentcourse='$studentcourse',studentcourse='$studentcourse',joindate='$joindate',studentphone='$studentphone',studentemail='$studentemail',studentaddress='$studentaddress',fees='$fees',advance='$advance',remaining='$remaining' where sid='$sid' ";
                                                    $ex = mysqli_query($db, $query);
                                                    if ($ex) {
                                                        // echo "Updated Successfully!!!";
                                                        $_SESSION['message'] = "Course Updated Successfuly!!!";
                                                        echo "<script>window.location.href='currentstudents.php'</script>";
                                                        exit(0);
                                                    } else {
                                                        // echo "Not Updated!!! ";
                                                        $_SESSION['message'] = "Course not Updated!!!";
                                                        // header("Loction:editcourse.php");
                                                        exit(0);
                                                    }
                                                }
                                            } 
                                    ?>
                                    <button type="submit" name="delete" class="btn btn-dark">Delete Student</button>
                                   
                                    <?php
                                            include('./db.php');
                                            if (isset($_POST['delete'])) {
                                                $sid = mysqli_real_escape_string($db, $_GET['sid']);
                                                $query = "DELETE from addstudent WHERE sid='$sid'";
                                                $ex = mysqli_query($db, $query);
                                                if ($ex) {
                                                    $_SESSION['message'] = "Course Deleted Successfuly!!!";
                                                    echo "<script>window.location.href='currentstudents.php'</script>";
                                                    exit(0);
                                                } else {
                                                    $_SESSION['message'] = "Course not Updated!!!";
                                                    exit(0);
                                                }
                                            } 
                                    ?>
                                    <?php }else{?>
                                        <button type="submit" name="add" class="btn btn-primary">Add</button>
                                    <?php }?>
                                    
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
                $studentcollege = $_POST['studentcollege'];
                $studentdegree = $_POST['studentdegree'];
                $department = $_POST['department'];
                $joindate=$_POST['joindate'];
                $studentphone=$_POST['studentphone'];
                $studentemail=$_POST['studentemail'];
                $studentaddress=$_POST['studentaddress'];
                $fees=$_POST['fees'];
                $advance=$_POST['advance'];
                $remaining=$fees-$advance;
                $query = "insert into addstudent values('$sid','$studentname','$studentcourse','$studentcollege','$studentdegree','$department','$joindate','$studentphone','$studentemail','$studentaddress','$fees','$advance','$remaining')";
                $ex = mysqli_query($db, $query);

                if ($ex) {

                    
                    $_SESSION['message']="Course added Successfuly!!!";
                    echo "<script>window.location.href='addstudent.php'</script>";
                    exit(0);
                }
                else
                {
                    $_SESSION['message']="Course added not Successfuly!!!";
                    echo "<script>window.location.href='addstudent.php'</script>";
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