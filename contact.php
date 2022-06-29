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
$Message = $_POST['Message'];
$Phone = $_POST['Phone'];
$appointment = $_POST['appointment'];

$query = "insert into contactuser (Name, Email, Message, Phone,appointment)
values('$Name','$Email','$Message', '$Phone','$appointment')";

// echo "$query";

mysqli_query($con, $query);



// if(preg_match('/^[0-9]{10}+$/', $Phone)) {
// 	echo "Valid Phone Number";
// 	} else {
// 	echo "Invalid Phone Number";
// 	}
?>