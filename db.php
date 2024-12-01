<?php
$db=mysqli_connect("localhost","root","","ai");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>