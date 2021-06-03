<?php

$host="localhost";
$user="root";
$pass="";
$dbname="tracking_system";

//$get=$_SESSION['number'];
$con=mysqli_connect($host,$user,$pass,$dbname);
if($con)
	{

echo "";
	}
	else

	{
echo " not Connected";
	}
/*
$Number_plate = $_POST['Number_plate'];
$name = $_POST['name'];

$queryinsert = "INSERT INTO `number`(`Number_plate`, `name`) VALUES ('$Number_plate', '$name')";
$res = mysqli_query($con, $queryinsert);
if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}

$query="SELECT * FROM number WHERE Number_plate='$get'";
$result=$con->query($query);

while($row=mysqli_fetch_array($result))
{
	echo "Car is registered";

	$get_number_plate=$row['Number_plate'];
	echo $get_number_plate;
	session_unset('number');
	session_destroy('number');
}
if (mysqli_num_rows($result)==0) { echo "Car is not registered"; }
*/

?>