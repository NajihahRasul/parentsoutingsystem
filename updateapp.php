<?php
require ('connectdb.php');
?>

<!DOCTYPE html>
<title>UPDATE APPLICATION : POS</title>

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
<form action = "prt_login.php" method = "get">
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
  <table width="100%" cellpadding="35" cellspacing="35"  bgcolor="#ffffff">
	<tr>

<center>
<td>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #006699;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #54BAB5;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<table width="100%; cellpadding="10" cellspacing="10"  bgcolor="#ffffff">
<tr align="center">

<?php

			include ('connectdb.php');
			$guardian_num = $_GET['guardian_num'];
			
			//$sql = "SELECT * FROM outing WHERE student_id = 12345";
			//$sql = "SELECT * FROM outing WHERE student_id ='".$_GET['data']."'";
			$sql = "SELECT * FROM outing WHERE guardian_num = '".$guardian_num."'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			
			$conn -> close();
		?>

<div class="content">
  <form action="viewApps.php" method="post">
<h2 class="sansserif">UPDATE OUTING APPLICATION</h2>
  
    <label>Parent's Name</label>
    <input class="input" type="text" name="prt_name" placeholder="Parents's Name" value= "<?php echo $row['prt_name']; ?>" required autofocus>

    <label>Parents's ID</label>
    <input class="input" type="text" name="guardian_num" placeholder="Parent's Identification Number" value= "<?php echo $row['guardian_num']; ?>" required>
	
	 <label>Parents IC</label>
    <input class="input" type="text" name="icNum" placeholder="IC Number" value= "<?php echo $row['icNum']; ?>" required>
	
	<label>Outing Date</label>
    <input class="input" type="text" name="date" placeholder="Date" value= "<?php echo $row['date']; ?>" required>
	
	<label>Address : State</label>
    <select name="state">
	  <option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
      <option value="Johor">Johor</option>
      <option value="Kuala Lumpur">Kuala Lumpur</option>
      <option value="Kedah">Kedah</option>
	  <option value="Kelantan">Kelantan</option>
      <option value="Melaka">Melaka</option>
	  <option value="Negeri Sembilan">Negeri Sembilan</option>
      <option value="Perak">Perak</option>
      <option value="Pulau Pinang">Pulau Pinang</option>
	  <option value="Perlis">Perlis</option>
      <option value="Pahang">Pahang</option>
	  <option value="Selangor">Selangor</option>
      <option value="Sabah">Sabah</option>
      <option value="Sarawak">Sarawak</option>
	  <option value="Terengganu">Terengganu</option>
    </select>
	
	<label>Student's Name</label>
    <input class="input" type="text" name="std_name" placeholder="Student's Name" value= "<?php echo $row['std_name']; ?>" required>
	
	<label>Student's ID</label>
    <input class="input" type="text" name="student_id" placeholder="Student's ID" value= "<?php echo $row['student_id']; ?>" required>
	
	<input class="btn" type="submit" name="submit" value="UPDATE">
 
  </form>
</div>
</tr>


		
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