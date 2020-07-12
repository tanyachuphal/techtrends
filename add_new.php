<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>add new achivement </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">        body {
    /* The image used */
   /* background-image: url("3.jpg");

    /* Set a specific height */
    /*min-height: 500px; 

    /* Create the parallax scrolling effect */
    /*background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}*/

    </style>
</head>

<body>

    <!-- Start your project here-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
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

</header>
<br><br><br><br><br><br>
<h1 class="container text-center text-uppercase">ACHIVEMENT DETAILS</h1>
<hr class="container">
<br>
<div class="row container text-center" style="margin:50px auto;">
    <div  class="col-md-12 container" align="left">
        <form action="value_std_form.php" method="post">
<div class="row container">
    <div class="col-md-3">
<label for="name">NAME</label></div>
<div class="col-md-3">
<input type="text" name="name" id="name" required="" style="width: 300%;"></div>
</div>
<br><br>

<div class="row container">
    <div class="col-md-3">
<label for="regno">REGISTRATION NO.</label></div>
<div class="col-md-3">
<input type="text" name="regno" id="regno" placeholder="piet17cs097" required=""  style="width: 300%;"></div>
</div>
<br><br>
<div class="row container">
<div class="col-md-3">
<label for="year">YEAR</label></div>
<div class="col-md-3">
<select name="year" id="year" required="true" style="width: 300%; height: 100%;">
    <option value="" >select year</option>
          <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
</select></div>
</div>
<br><br>
<div class="row container">
    <div class="col-md-3">
        <label for="interest">FIELD OF INTEREST</label></div>
    <div class="col-md-3">
        <select name="interest" id="interest" required="true" style="width: 300%; height: 100%;">
        <option value="" >select field</option>
          <option value="coding">coding</option>
      <option value="Website Building">Website Building</option>
      <option value="Android Development">Android Development</option>
      <option value="Business Entreprenurship">Business Entreprenurship</option>
</select>
    </div>
</div><br><br>
<div class="row container">
    <div class="col-md-3">
<label for="details">ACHIVEMENT DETAILS</label></div>
<div class="col-md-3">
<textarea name="details" id="details" placeholder="enter the detail of achivement" style="width: 300%;"></textarea>
</div></div>
<br><br>
<input style="margin-left: 270px; " type="reset" name="reset">

<input style="margin-left: 20px; " type="submit" name="submit">
<br><br>
</div>
</div>
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
  <!-- Footer -->


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>
</html>