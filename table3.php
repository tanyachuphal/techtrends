
<?php

  require_once("db_event_form.php");
  $interest= "Business Entreprenurship";
  $servername="localhost";
$username="root";
$password="";
$dbname="crew";
$conn=mysqli_connect($servername,$username,$password,$dbname);

  
  

  
?>





<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fetching Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

</head>
<body>
	
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#"><strong>Tech Trends</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="font-size:18px;">
                <li class="nav-item">
                    <a class="nav-link" href="crew_list.php">Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Homepage</a>
                </li>
                
            </ul>
        </div>
        
             </nav>

</header><br>
<div class="container" style="margin-top:100px;text-align:center;color: #007bff;">
<h2><b>Student Details</b></h2><hr>
</div><br>




	<table class="table table-striped container" style="margin-left: 300px ; margin-right: 100px; ">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">NAME</th>
      <th scope="col">REG_NO.</th>
      <th scope="col">YEAR</th>
      <th scope="col">FIELD OF INTEREST</th>
      <th scope="col">ACHIVEMENT DETAILS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(!$conn)
{
  die("connection failed:".mysqli_connect_error());
}
else
{
    $query = "SELECT * from add_std where `interest`= '$interest';";
    $query_result = mysqli_query($conn, $query);
    $i=1;
    while($output = mysqli_fetch_assoc($query_result)) {
$data =<<<DELIMETER
    <tr>
      <th scope="row">{$i}</th>
      <td>{$output['name']}</td>
      <td>{$output['regno']}</td>
      <td>{$output['year']}</td>
      <td>{$output['interest']}</td>
      <td>{$output['details']}</td>
    </tr>
DELIMETER;
echo $data;
  $i++;
  }
}
    ?>
  

  </tbody>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

 <footer class="page-footer font-small indigo pt-4">

    <div class="container text-center">
      <div class="row">
        
       

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-12 mt-md-0 mt-3">
          <a href="homepage.php"><h5 class="text-uppercase">TECH TRENDS</h5>
          <p>A virtual world of trends committed to the people.</p></a>
        </div>
          
      </div>
    </div>
    
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Team-101A</a>
    </div>

  </footer>




  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
