<!DOCTYPE html>
<head>
<title>OUTING APPLICATION : POS</title>

<script src="js/jquery-1.11.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit3").click(function() {
			var prt_name = $("#prt_name").val();
			var guardian_num = $("#guardian_num").val();
			var icNum = $("#icNum").val();
			var date = $("#date").val();
			var state = $("#state").val();
			var std_name = $("#std_name").val();
			var student_id = $("#student_id").val();
			
			$.ajax({
			  type: "POST",
			  data: {
				prt_name : prt_name,
				guardian_num : guardian_num,
				icNum : icNum,
				date : date,
				state : state,
				std_name : std_name,
				student_id : student_id
			  },
			  url: "outingapp2.php",
			/*   success: function(data){ */
			 success: function(){ 
			   alert("Successfull!");
			  }
			});
		});
	});
	
</script>
</head>
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

<center>
<td>

<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
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

<div class="content">
  <form action="" method="post">
<h2 class="sansserif">OUTING APPLICATION</h2>
  
    <label>Parent's Name</label><br>
    <input class="input" type="text" name="prt_name" id="prt_name" placeholder="Parents's Name" required autofocus><br>

    <label>Parents's ID</label><br>
    <input class="input" type="text" name="guardian_num" id="guardian_num" placeholder="Parent's Identification Number"><br>
	
	 <label>Parents IC</label><br>
    <input class="input" type="text" name="icNum"  id="icNum" placeholder="IC Number"><br>
	
	<label>Outing Date</label><br>
    <input class="input" type="date" name="date"  id="date" placeholder="Date"><br>
	
	<label>Address : State</label><br>
    <select name="state" id="state">
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
    </select><br>
	
	<label>Student's Name</label><br>
    <input class="input" type="text" name="std_name" id="std_name" placeholder="Student's Name"><br>
	
	<label>Student's ID</label><br>
    <input class="input" type="text" name="student_id"  id="student_id" placeholder="Student's ID"><br>
	
	<input class="btn" type="submit" name="submit"  id="submit3" value="Submit">
 
  </form>
</div>
</tr>

<table width="100%;cellpadding="10" cellspacing="10" bgcolor="#54BAB5">

<tr><td><center><span style="font-size:12px;color:#ffffff;font-family:arial;">
<h3>DAD FINAL PROJECT</h3> 
<strong>PREPARED BY : <br>
SYAFIQ | USRI | NASRUL | NAJIHAH
<br>B031710135 | B031710085 | B031710113 | B031710095<br>
<br>SEMESTER 18/19  <br>

</body>
</html>