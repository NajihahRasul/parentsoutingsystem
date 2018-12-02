<?php
require ('connectdb.php');
?>

<!DOCTYPE html>
<title>CHECK STATUS : POS</title>

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
  <li><a href="viewinfo2.php"><strong>INFORMATION</strong></a></li>
  <li><a href="approval.php"><strong>APPROVAL</strong></a></li>
  <li><a href="displaydata2.php"><strong>STATUS</strong></a></li>
   <li><a href="report.php"><strong>REPORT</strong></a></li>
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

<center><p class="round2"><br>Date : &nbsp;&nbsp;
<input type="date" name="date"><br>
<br>Format : 00-00-00<br><br>
<input type="submit" value="Search"></a><br><br></p><br><br></center>
</form>
<body>


<center><form action="" method="POST">
<table id="view">
  <tr>
	<th>PARENT'S ID</th>
    <th>STUDENT'S ID</th>
    <th>NAME</th>
    <th>APPROVAL</th>
	

<br><br>	

<?php
if (!empty($_REQUEST['date'])) {
  $search = $_GET['date'];


$sql = "SELECT * FROM outing WHERE date LIKE '%$search%'"; 
$r_query = mysqli_query($conn,$sql); 


while ($row = mysqli_fetch_array($r_query)){  
 
echo '<tr>
					
					
				<td><input type="hidden" name="guardian_num" value="'.$row['guardian_num'].'" >'.$row['guardian_num'].'</td>
				<td><input type="hidden" name="student_id" value="'.$row['student_id'].'" >'.$row['student_id'].'</td>
				<td><input type="hidden" name="std_name" value="'.$row['std_name'].'" >'.$row['std_name'].'</td>
				<td><input type="radio" name="answers" value="yes">Yes
				<input type="radio" name="answers" value="no">No</td>
				</tr>';

}  

}
?>
<!--<center><form action="" method="POST">
<p><input type="radio" name="answers" value="yes">Yes
<input type="radio" name="answers" value="no">No</p>-->
<button name="submit" class="button">SUBMIT</button>
</form></center>
	
<?php
	include ('connectdb.php');
	
	if (isset($_POST['submit'])){
		$guardian_num = $_POST['guardian_num'];
		$student_id = $_POST['student_id'];
		$std_name = $_POST['std_name'];
		$approve = $_POST['answers'];
		
		//$sql = mysqli_query($conn,"INSERT INTO status (date, student_id, status_stmt) VALUES ('$date', '$student_id', '$status_stmt')");
		$sql = mysqli_query($conn,"INSERT INTO approval (guardian_num, student_id, std_name, approve) VALUES ('$guardian_num', '$student_id', '$std_name', '$approve')");
		
		if($sql == TRUE){
			echo '<script language="javascript">';
			echo 'alert("Data has been record!");';
			echo '</script>';
			
		}else{
			echo "Error : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close();
	}
	?>


</table><tr>

<tr>
		
<table width="100%;cellpadding="10" cellspacing="10" bgcolor="#54BAB5">

<tr><td><center><span style="font-size:12px;color:#ffffff;font-family:arial;">
<h3>DAD FINAL PROJECT</h3> 
<strong>PREPARED BY : <br>
SYAFIQ | USRI | NASRUL | NAJIHAH
<br>B031710135 | B031710085 | B031710113 | B031710095<br>
<br>SEMESTER 18/19  <br>

</body>
</html>