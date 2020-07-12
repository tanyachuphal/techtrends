<?php
	require("db_std_form.php");
	$name = $_POST['name'];
	$year = $_POST['year'];
	$interest = $_POST['interest'];
	$regno = $_POST['regno'];
	$details = $_POST['details'];

	echo "Name - ".$name."<br>";
	echo "Year - ".$year."<br>";
	echo "Interest - ".$interest."<br>";
	echo "Registration No. - ".$regno."<br>";
	echo "Details - ".$details."<br>";		

	$query = "INSERT INTO `add_std`( `name`, `regno`, `year`,  `interest`,`details`) VALUES ('{$name}', '{$regno}', '{$year}', '{$interest}','{$details}')";
	$query_result = mysqli_query($conn, $query);
?>