<?php
require ('connectdb.php');
?>

<!DOCTYPE html>
<title>RECORD OUTING TIME : POS</title>

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
    padding: 14px 285px;
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
<form action = "grd_login.php" method = "get">
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
  <li><a href="grd_home.php"><strong>HOME</strong></a></li>
  <li><a href="recordtime2.php"><strong>STATUS</strong></a></li>
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

<center><p class="round2"><br>Students ID : &nbsp;&nbsp;
<input type="text" name="data">
<br><br>
<input type="submit" value="Search"></a><br><br></p><br><br></center>
</form>
<body>

<table id="view">
  <tr>
    <th>STUDENT'S ID</th>
    <th>NAME</th>
	<th>OUTING STATUS</th>
	
	
			


<?php
if (!empty($_REQUEST['data'])) {
  $search = $_GET['data'];


$sql = "SELECT * FROM approval WHERE student_id LIKE '%$search%' group by student_id"; 
$r_query = mysqli_query($conn,$sql); 



while ($row = mysqli_fetch_array($r_query)){  
 
echo '<tr>
					
					<td><input type="hidden" name="student_id" value="'.$row['student_id'].'" >'.$row['student_id'].'</td>
					<td>'.$row['std_name'].'</td>
					<td>'.$row['approve'].'</td>
				</tr>';

}  

}
?>

<?php
include ('connectdb.php');


if(isset($_POST['btnstart'])){
$student_id = $_GET['data'];
//$start_out = $_POST['btnstart'];

$sql = mysqli_query($conn, "INSERT INTO status (student_id, start_out) VALUES ('$student_id', NOW())");
//$sql = mysqli_query($conn, "INSERT INTO status (start_out, ) VALUES (NOW())");

if($sql == TRUE){
  echo '<script>alert("Outing session has been start! : '.date('Y-m-d H:i:s').'")</script>';

  }else{
		echo "Cannot record outing time : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close();
}
?>

<?php
include ('connectdb.php');


if(isset($_POST['btnend'])){
$student_id = $_GET['data'];

$sql = mysqli_query($conn, "UPDATE status SET end_out = NOW() WHERE student_id = '$student_id' ");
//$sql = mysqli_query($conn, "INSERT INTO status (end_out) VALUES (NOW()WHERE student_id = '$student_id') ");

if($sql == TRUE){
  echo '<script>alert("Outing session has end! : '.date('Y-m-d H:i:s').'")</script>';

  }else{
		echo "Cannot record outing time : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close();
}
?>

		<center>
<form action="" method="POST">
<button name="btnstart" class="button">OUTING START</button>
<button name="btnend" class="button">OUTING END</button>
</form>	
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