<?php
//include('connect-mysql.php');
$con=mysqli_connect('localhost','root','','servicecont') or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//$sqlget = "SELECT * FROM testimonial";
$sqldata = mysqli_query($con , "SELECT * FROM testimonial");
$row = mysqli_fetch_assoc($sqldata);
echo $row['T_id'];
?>