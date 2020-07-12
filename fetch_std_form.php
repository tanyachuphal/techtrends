<?php
	require_once("db_std_form.php");
	$query = "SELECT * from input";
	$query_result = mysqli_query($conn, $query);
	$output = mysqli_fetch_assoc($query_result);
	echo $output['name'];
	echo "<br>";
	echo $output['year'];
	echo "<br>";
	echo $output['regno'];
	echo "<br>";
	echo $output['interest'];
	echo "<br>";
	echo $output['details'];
	echo "<br>";
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Fetch</title>
<style type="text/css">
	td{
		border-width: 1px; border-color: black; border-style: solid;
		padding: 10px;
	}
</style>
</head>
<body>
	
<table>
	<tr>
		<td>Name</td>
		<td>Year</td>
		<td>Reg.no.</td>
		<td>interest</td>
		<td>details</td>
	</tr>
	<tr>
		<td><?php echo $output['name']; ?></td>
		<td><?php echo $output['year']; ?></td>
		<td><?php echo $output['regno']; ?></td>
		<td><?php echo $output['interest']; ?></td>
		<td><?php echo $output['details']; ?></td>
	</tr>

</table>