<?php
require ('connectdb.php');
?>

<!DOCTYPE html>
<title>REPORT : POS</title>

<body>
<body background="wallpaper6.jpg">

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
  <li><a href="viewinfo3.php"><strong>INFORMATION</strong></a></li>
  <li><a href="approval.php"><strong>APPROVAL</strong></a></li>
  <li><a href="displaydata3.php"><strong>STATUS</strong></a></li>
   <li><a href="report.php"><strong>REPORT</strong></a></li>
</ul>

	</tr>
    </table>
    
    <tr>&nbsp;<tr>
  <table width="100%" cellpadding="50" cellspacing="50"  bgcolor="#ffffff"><br>
 	
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
  border: 0.5rem outset pink;
  border-radius: 12px;
  margin: 2rem;
  padding: 1rem;
  outline-offset: 0.5rem;
}

</style>



<form action="" method="get">  

<center><p class="round2"><br>Date : &nbsp;&nbsp;
<input type="date" name="date"><br>
<br>Format : 00-00-00<br><br>
<input type="submit" value="Search"></a><br><br></p><br><br></center>
</form>
<body>

<table id="view">
  <tr>
    <th>STUDENT'S ID</th>
	<th>RETURN TIME</th>
	<th>OUTING DURATION (00:00:00)</th>
		
	
<?php
if (!empty($_REQUEST['date'])) {
  $search = $_GET['date'];
  //$duration = $_GET['duration'];
  //$student_id = $_GET['student_id'];
  //$end_out = $_GET['end_out'];
  
//SELECT student_id FROM `status` WHERE end_out LIKE '2018-04-07%'
  
//$sql = "SELECT student_id, end_out > 17, round((end_out - start_out)/60,0) AS duration FROM `status` WHERE end_out LIKE '$search%'"; 
//$sql = "SELECT student_id, (end_out) AS end_out, ( CAST( end_out AS TIME ) - CAST( start_out AS TIME ) ) /3600 AS duration FROM `status` WHERE end_out LIKE '$search%'"; 

$sql = "SELECT student_id, (end_out) AS end_out,( CAST( end_out AS TIME ) - CAST( start_out AS TIME ) ) AS duration FROM `status` WHERE end_out LIKE '$search%' and CAST(`end_out` as time) > CAST('17:00' as time)"; 
//$sql = "SELECT student_id, (end_out) AS end_out,( CAST( end_out AS TIME DEFAULT TIMESTAMP ) - CAST( start_out AS TIME AS INTERVAL DEFAULT TIMESTAMP ) ) AS duration FROM `status` WHERE end_out LIKE '$search%' and CAST(`end_out` as time) > CAST('17:00' as time)"; 


//to calculate duration
//$sql = "SELECT( CAST( end_out AS DATE ) - CAST( start_out AS DATE ) ) * 86400 FROM status";
$r_query = mysqli_query($conn,$sql); 

//timestamp calculation
//$end_out = $_GET['end_out'];
//$start_out = $_GET['start_out'];
//$duration = $end_out - $start_out;

while ($row = mysqli_fetch_array($r_query)){  
 
echo '<tr>
					
					<td>'.$row['student_id'].'</td>
					<td>'.$row['end_out'].'</td>
					<td>'.$row['duration'].'</td>
				</tr>';

}  
}

?>	

<tr>
</table><tr>
<table><center><form method="get" action="chart.php">
<button name="submit" class="button"><strong>NEXT</strong></button></form></center></table>
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