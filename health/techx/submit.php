<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "techx";
$con = mysqli_connect($server, $uname, $pwd, $db) or die('Failed to connect');
$name = $_POST['name'];
$email = $_POST['email'];
$college = $_POST['college'];
$department = $_POST['department'];
$degree = $_POST['degree'];
$contact = $_POST['contact'];
$fevent = $_POST['firstevent'];
$sevent = $_POST['secondevent'];
$query = "insert into Registration values('$name','$email','$college','$department','$degree',$contact,'$fevent','$sevent')";
if ($result = mysqli_query($con, $query)) {
    echo "<script>alert('Register Successfully');window.location.href='https://seminar.sjctni.edu/CSE/ICS/';</script>";
} else {
    echo "Registration Error";
}
?>