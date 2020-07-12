<!DOCTYPE html>
<html lang="en-US">
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

</header>

<br><br><br><br>


<center>
<h1>Showing chart</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['coding', 4],
  ['website', 2],
  ['andriod', 3],
  ['business', 2],

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':700, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</center>

 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>
</html>
