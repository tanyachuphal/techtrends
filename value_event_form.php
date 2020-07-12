<?php
	require("db_event_form.php");
	$name = $_POST['name'];
	$date = $_POST['date'];
	$venue = $_POST['venue'];
	$detail = $_POST['detail'];
	$year = $_POST['year'];

	echo "Name - ".$name."<br>";
	echo "date - ".$date."<br>";
	echo "venue - ".$venue."<br>";
	echo "detail - ".$detail."<br>";
	echo "year - ".$year."<br>";		

	$query = "INSERT INTO `add_event`( `name`, `date`, `venue`, `detail`,  `year`) VALUES ('{$name}', '{$date}', '{$venue}','{$detail}', '{$year}')";
	$query_result = mysqli_query($conn, $query);
?>