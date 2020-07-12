<?php  

session_start();
 
 if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
   header("location: homepage.php");
 }

else
{
header("locatio: signup.php");
}





?>



<!DOCTYPE html>
<html >
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
            <a class="navbar-brand" href="#"><strong>Tech Trends</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a href="signup.php">  <p class="btn" data-toggle="modal" data-target="#Form" style="width: 150px; "> sign up</p></a>
                </li></ul>
        </div>
        
    
</div>
</head>
</html>

</header>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">
        <style type="text/css">
          /**
 * 01/28/2016
 * This pen is years old, and watching at the code after all
 * those years made me fall from my chair, so I:
 * - changed all IDs to classes
 * - converted all units to pixels and em units
 * - changed all global elements to classes or children of
 *   .login
 * - cleaned the syntax to be more consistent
 * - added a lot of spaces that I so hard tried to avoid
 *   a few years ago
 *   (because it's cool to not use them)
 * - and probably something else that I can't remember anymore
 *
 * I sticked to the same philosophy, meaning:
 * - the design is almost the same
 * - only pure HTML and CSS
 * - no frameworks, preprocessors or resets
 */

/* 'Open Sans' font from Google Fonts */
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  margin-top: 200px;
  background: #456;
  font-family: 'Open Sans', sans-serif;
}

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
        </style>

    
    
    
  </head>

  <body style="background-color: white;">

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>
  <form method="POST" class="login-container" action="fdata.php">
    <p><input type="email" placeholder="Email" name="email" required=""></p>
    <p><input type="password" placeholder="Password" name="psw" required=""></p>
    <p><input type="submit" value="login"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>
