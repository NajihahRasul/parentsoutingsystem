<?php
$connect = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT state, COUNT(*) AS number FROM outing GROUP BY state";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<title>CHECK STATUS : POS</title>

<body>
<body style="background-color:#f0f0f0">

<style>
 table, th, td{
  text-align:justify;
 }
</style>
<style>
ul {
    list-style-type: none;
    margin: 20;
    padding: 15;
    overflow: hidden;
    background-color: #54BAB5;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 85px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #006699;
}

.active {
    background-color: #006699;
}
</style>
<table width="100%">
<tr>

<tr>
<td>
<span style=text-align:right;float:right;">
<form action = "admin_login.php" method = "get">
<input type = "image" img src="logout.png" width="50" height="50" onClick="return confirm('Are You Sure?')">
</form>
</td>
</tr>

<tr>
<tr>
	  <td><center><img src="pots.png"alt=""style="width:24%;height:auto;"></center></td>
      </tr>
      </table>
      
 <tr>

<td>
<span style="font-size:15px;color:#000000;font-family:Georgia;letter-spacing:1px;text-align:left;">&nbsp</span></td>
</tr>   
<td>
<span style="font-size:15px;color:#000000;font-family:Georgia;letter-spacing:1px;text-align:left;">&nbsp</span></td>
</tr>   
      
  
<table width="100%" cellpadding="3" cellspacing="5"  bgcolor="#006699">
	<tr>
    <ul>
  <li><a href="home.php"><strong>HOME</strong></a></li>
  <li><a href="viewinfo2.php"><strong>INFORMATION</strong></a></li>
  <li><a href="approval.php"><strong>APPROVAL</strong></a></li>
  <li><a href="displaydata2.php"><strong>STATUS</strong></a></li>
   <li><a href="report.php"><strong>REPORT</strong></a></li>
</ul>

	</tr>
    </table>
    
    <tr>&nbsp;<tr>
  <table width="100%" bgcolor="#ffffff">
	<tr>

<center>
<td>

<head>
<style>
#view {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#view td, #view th {
    border: 1px solid #ddd;
    padding: 8px;
}

#view tr:nth-child(even){background-color: #f2f2f2;}

#view tr:hover {background-color: #ddd;}

#view th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #006699;
    color: white;
}
</style>
</head>

<style>
.button {
    background-color: #FFC0CB;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<style>
p.round2 {
    border: 2px solid blue;
    border-radius: 10px;
}

</style>

<center><h1>ANALYSIS DATA</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['state', 'number'],
			<?php
			while($row = mysqli_fetch_array($result))
			{
			echo "['".$row["state"]."', ".$row["number"]."],";
			}
			?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Percentage of Outing Application Based On Student State', 'width':650, 'height':500, is3D:true};
  

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</center>			
</table><tr>
<tr>
		
<table width="100%;cellpadding="10" cellspacing="10" bgcolor="#54BAB5">

<tr><td><center><span style="font-size:12px;color:#ffffff;font-family:arial;">
<h3>WORKSHOP 1</h3> 
<strong>PREPARED BY : <br>
Nur Najihah Binti Mohd Rasul
<br>B031710095<br>
<br>SUPERVISED BY : <br>
Datin Nurazlina Binti Md Sanusi<br>

© AjiRasul</strong> 
<BR></td></tr>

</body>
</html>