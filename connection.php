<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con=mysqli_connect("localhost:3306","root","","online food order");
if(!$con){
	echo "not connected";
}
?>