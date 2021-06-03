<?php
session_start();
include 'DbConnect.php';

//$get=$_SESSION['number'];


if(isset($_POST['checkk']))
{

	$Number_plate = $_POST['Number_plate'];
    $q = "select * from number where Number_plate='$Number_plate'";
       
$result=$con->query($q);

$num = mysqli_num_rows($result);

	
if ($num == 1) {
	echo "REGISTERED!!";
	//header('location:dashboard.php');
}
else {
	echo "Un Registered";
}
}





/*if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
*/
?>