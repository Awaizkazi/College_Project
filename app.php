<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo "Thanks You ! 😊😊Will Contact you Soon !!!";
}else{
	echo "No connection";
}

mysqli_select_db($con,'servicecont');
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Date = $_POST['Date'];
// $appointment = $_POST['appointment'];

$query = "insert into appointment(Name, Email, Phone,  Date)
values('$Name','$Email','$Phone', '$Date')";

// echo "$query";

mysqli_query($con, $query);

$con=mysqli_connect('localhost','root','','servicecont') or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//$sqlget = "SELECT * FROM testimonial";
$sqldata = mysqli_query($con , "SELECT * FROM testimonial");
$row = mysqli_fetch_assoc($sqldata);
echo $row['T_id'];

// if(preg_match('/^[0-9]{10}+$/', $Phone)) {
// 	echo "Valid Phone Number";
// 	} else {
// 	echo "Invalid Phone Number";
// 	}
?>