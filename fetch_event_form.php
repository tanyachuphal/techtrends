<?php
	require_once("db_event_form.php");
	$query = "SELECT * from add_event";
	$query_result = mysqli_query($conn, $query);
	$output = mysqli_fetch_assoc($query_result);
	echo $output['name'];
	echo "<br>";
	echo $output['date'];
	echo "<br>";
	echo $output['venue'];
	echo "<br>";
	echo $output['detail'];
	echo "<br>";
	echo $output['year'];
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
		<td>Date</td>
		<td>Venue</td>
		<td>Details</td>
		<td>Year</td>
	</tr>
	<tr>
		<td><?php echo $output['name']; ?></td>
		<td><?php echo $output['date']; ?></td>
		<td><?php echo $output['venue']; ?></td>
		<td><?php echo $output['detail']; ?></td>
		<td><?php echo $output['year']; ?></td>
	</tr>

</table>

<!-- <form action="value.php" method="post">

<label for="Name">Name</label><br>
<input type="text" name="name" id="Name" required=""><br><br>

<label for="Password">Password</label><br>
<input type="password" name="password" id="Password" required=""><br><br>

<label for="Gender">Gender</label><br>
  <input type="radio" name="gender" id="Gender" value="male" required="">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other<br><br>

<label for="DOB">DOB</label><br>
  <input type="date" name="bday" id="DOB" required=""><br><br>

<label for="Section">Section</label><br>
  <select name="section" id="Section" required="">
      <option value="">Select Section</option>
      <option value="3CSA">3CSA</option>
      <option value="3CSB">3CSB</option>
      <option value="5CSA">5CSA</option>
      <option value="5CSB">5CSB</option>
  </select><br><br>

<input type="reset" name="reset">

<input type="submit" name="submit">	

</form> -->

</body>
</html>