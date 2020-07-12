<?php 
   include('config.php');
   error_reporting(0);
   // submit form data in mysql database 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['psw'];
   if($_REQUEST['submit']){
   	$duplicat=mysqli_query($conn,"SELECT * from user_register where email='$email'");
   	$num=mysqli_fetch_array($duplicat);
   	if(mysqli_num_rows($duplicat)>0){
   	
   }else{
     mysqli_query($conn,"INSERT INTO user_register(`name`,`email`,`password`) values('$name','$email','$password')");
   	header("location:homepage.php");
   	echo"<script>alert('Signup is Successfully !');</script>";
   }
   }
?>
<!DOCTYPE html>
<html>
<head>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tech Trends</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet" >
</head>

<body>

<!--Main Navigation-->
<header>

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo" style="height: 60px;">
            <a class="navbar-brand" href="login.php"><strong>Tech Trends</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a href="login.php">  <p class="btn" data-toggle="modal" data-target="#Form" style="width: 150px; "> back</p></a>
                </li></ul>
        </div>
        
    
</div>
</head>
</html>

</header>
  <title></title>
<style type="text/css">
body{
  margin-top: 200px;
}
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 15px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.box{
  margin-left: 550px;
  width: 600px;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  margin: 10 50px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.btn
{
  margin-left: 250px;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 50%;
  }
}
  

</style>
</head>
<body>

<div class="box">
<form method="POST" action="" style="border:1px solid #ccc">
  <div class="container">
    <h1><center>Sign Up</center></h1>
    <p><center>Please fill in this form to create an account.</center></p>
    <hr>


     <label for="email"><b>Name  </b></label>
    <input type="text" placeholder="Enter name" name="name" required><br>

    <label for="email"><b>Email   </b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <br>

    <div class="clearfix">
      <div class="btn">
        <input type="submit" name="submit" value="register">
    </div>
  </div>
</form>
</div>
</body>
</html>