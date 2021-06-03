<?php
session_start();
include 'DbConnect.php';

if(isset($_POST['btn-click']))
{

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result=$con->query($q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:dashboard.php');
}
else{
	header('location:index.php');
}



}
/*
$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}
else{
	echo "no connection";
}

mysqli_select_db($con, 'dbdb');
$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home1.php');
}
else{
	header('location:Home.php');
}
*/
?>