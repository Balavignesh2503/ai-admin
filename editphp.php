<?php
echo "<pre>";
print_r($_POST);  // Debug to see if `cid` is being passed
echo "</pre>";
include('./db.php');
session_start();
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
            $_SESSION['message'] = "Course edited Successfuly!!!";
            header("Loction:editcourse.php");
            exit(0);
        } else {
            // echo "Not Updated!!! ";
            $_SESSION['message'] = "Course not edited!!!";
            header("Loction:editcourse.php");
            exit(0);
        }
    }
} else {
    echo "cid is not set in POST data.";
}
?>

<?php
echo "<pre>";
print_r($_POST);  // Debug to see if `cid` is being passed
echo "</pre>";
include('./db.php');
if (isset($_POST['delete'])) {
    $course_id = mysqli_real_escape_string($db, $_POST['cid']);
    $query = "DELETE from addcourse WHERE cid='$course_id'";
    $ex = mysqli_query($db, $query);
    if ($ex) {
        echo "Deleted Successfully!!!";
    } else {
        echo "Deleted not Successfully!!!";
    }
} else {
    echo "cid is not set in POST data.";
}
?>
