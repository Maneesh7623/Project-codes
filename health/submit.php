<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "hospital";
$con = mysqli_connect($server, $uname, $pwd, $db);
$gender = $_POST['gender'];
$spec = $_POST['spec'];
$exp = $_POST['exp'];
$loc = $_POST['loc'];
$ad = $_POST['address'];
$cno = $_POST['cno'];
$query = "insert into doctor values('$name','$gender','$spec','$exp','$loc','$ad','$cno')";
if ($result = mysqli_query($con, $query)) {
    echo "<script>alert('Register Successfully');window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Registration Error');window.location.href='adminhome.html';</script>";
}
?>