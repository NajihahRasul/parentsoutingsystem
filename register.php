<!DOCTYPE html>
<head>
<title>STUDENTS REGISTER : POS</title>
<script src="js/jquery-1.11.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit").click(function() {
			var std_name = $("#std_name").val();
			var student_id = $("#student_id").val();
			var guardian_num = $("#guardian_num").val();
			var std_password = $("#std_password").val();
			var std_class = $("#std_class").val();
			var ic_num = $("#ic_num").val();
			var hostel_room = $("#hostel_room").val();
			var home_address = $("#home_address").val();
			var home_address2 = $("#home_address2").val();
			var home_address3 = $("#home_address3").val();
			var home_address4 = $("#home_address4").val();
			
			$.ajax({
			  type: "POST",
			  data: {
				std_name : std_name,
				student_id : student_id,
				guardian_num : guardian_num,
				std_password : std_password,
				std_class : std_class,
				ic_num : ic_num,
				hostel_room : hostel_room,
				home_address : home_address,
				home_address2 : home_address2,
				home_address3 : home_address3,
				home_address4 : home_address4
			  },
			  url: "register4.php",
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
    padding: 14px 280px;
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
<form action = "std_login.php" method = "get">
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
	<li><a href="mainpage.php"><strong>MAINPAGE</strong></a></li>
	<li><a href="std_login.php"><strong>LOGIN</strong></a></li>
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
.submit {
    background-color: 37DA66;
    color: white;
    padding: 14px 30px;
    margin: 20px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}
input[type=submit]:hover {
    background-color: #54BAB5;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 0px;
}
</style>
<body>
<table width="100%; cellpadding="10" cellspacing="10"  bgcolor="#ffffff">
<align="center">

<center><div class="content">
  <form action="" method="post">
<h2 class="sansserif">REGISTRATION</h2>
<h3>Students</h3>
  
    <label>Name</label><br>
    <input class="input" type="text" name="std_name" id="std_name" placeholder="Student's Name" required autofocus><br>

    <label>ID</label><br>
    <input class="input" type="text" name="student_id"  id="student_id" placeholder="Student's Identification Number"><br>
	
	 <label>Parents' ID</label><br>
    <input class="input" type="text" name="guardian_num" id="guardian_num" placeholder="Parents' Identification Number"><br>
	
	 <label>Password</label><br>
    <input class="input" type="text" name="std_password"  id="std_password" placeholder="Student's Password"><br>
	
	<label>Class</label><br>
    <select name="class" id="std_class" ><br>
      <option value="Forensics">Forensics</option>
      <option value="Geology">Geology</option>
      <option value="Hydrology">Hydrology</option>
	  <option value="Iridology">Iridology</option>
      <option value="Jurisprudence">Jurisprudence</option>
    </select><br>
	
	<label>Identification Card Number</label><br>
    <input class="input" type="text" name="ic_num" id="ic_num" placeholder="Student's IC"><br>
	
	<label>Hostel Room</label><br>
    <input class="input" type="text" name="hostel_room" id="hostel_room" placeholder="Hostel Room"><br>
	
	<label>Address & Street</label><br>
    <input class="input" type="text" name="home_address" id="home_address" placeholder="Student's Address"><br>
	
	<label>City</label><br>
    <input class="input" type="text" name="home_address2"  id="home_address2" placeholder="Student's Address"><br>
	
	<label>Postcode</label><br>
    <input class="input" type="text" name="home_address3"  id="home_address3" placeholder="Student's Address"><br>
	
	<label>State</label><br>
    <input class="input" type="text" name="home_address4" id="home_address4" placeholder="Student's Address"><br>
	
	<input class="btn" type="submit" name="submit"  id="submit" value="Submit"><br>
	
  </form>
</div>

<table width="100%;cellpadding="10" cellspacing="10" bgcolor="#54BAB5">

<tr><td><center><span style="font-size:12px;color:#ffffff;font-family:arial;">
<h3>DAD FINAL PROJECT</h3> 
<strong>PREPARED BY : <br>
SYAFIQ | USRI | NASRUL | NAJIHAH
<br>B031710135 | B031710085 | B031710113 | B031710095<br>
<br>SEMESTER 18/19  <br>

</body>
</html>