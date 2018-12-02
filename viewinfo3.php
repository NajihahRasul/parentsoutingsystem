<?php
require ('connectdb.php');
?>

<!DOCTYPE html>
<title>PARENTS AND STUDENT'S INFORMATION : POS</title>

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
    padding: 20;
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
    padding: 14px 105px;
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
<form action = "admin.php" method = "get">
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
  <li><a href="prt_home.php"><strong>HOME</strong></a></li>
  <li><a href="viewinfo3.php"><strong>INFORMATION</strong></a></li>
  <li><a href="outingapp.php"><strong>OUTING APPLICATION</strong></a></li>
  <li><a href="displaydata3.php"><strong>STATUS</strong></a></li>
</ul>
</tr>
    </table>
    
    <tr>&nbsp;<tr>
  <table width="100%" cellpadding="50" cellspacing="50"  bgcolor="#ffffff">
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

<center><p class="round2"><br>Parents ID : &nbsp;&nbsp;
<input type="text" name="data">
<br><br>
<input type="submit" value="Search"></a><br><br></p><br><br></center>
</form>
<body>

<table id="view">
  <tr>
    <th>PARENT'S ID</th>
    <th>PARENT'S NAME</th>
    <th>PARENT'S IC</th>
	<th>ADDRESS</th>
	<th>MOBILE NO.</th>
	<th>CAR PLATE NO.</th>
	<th>STUDENT'S ID</th>
    <th>STUDENT'S NAME</th>
	<th>CLASS</th>
	<th>STUDENT'S IC</th>
	<th>HOSTEL ROOM</th>
	<th>ADDRESS</th>

<?php
if (!empty($_REQUEST['data'])) {
  $search = $_GET['data'];


$sql = "SELECT * FROM students, parents WHERE parents.guardian_num LIKE '$search' AND students.guardian_num = parents.guardian_num"; 
$r_query = mysqli_query($conn,$sql); 



while ($row = mysqli_fetch_array($r_query)){  
 
echo '<tr>
					
					<td>'.$row['guardian_num'].'</td>
					<td>'.$row['prt_name'].'</td>
					<td>'.$row['icNum'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['mobile_no'].'</td>
					<td>'.$row['car_plate'].'</td>
					<td>'.$row['student_id'].'</td>
					<td>'.$row['std_name'].'</td>
					<td>'.$row['class'].'</td>
					<td>'.$row['ic_num'].'</td>
					<td>'.$row['hostel_room'].'</td>
					<td>'.$row['home_address'].'</td>
				</tr>';

}  
}
?>
			
</table><br><br>
<tr>
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