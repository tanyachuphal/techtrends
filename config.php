<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crew";
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection error!");
}

?>