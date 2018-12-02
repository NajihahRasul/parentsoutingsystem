<!DOCTYPE html>
<head>
<title>PARENTS REGISTER : POS</title>


<script src="js/jquery-1.11.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit2").click(function() {
			var prt_name = $("#prt_name").val();
			var guardian_num = $("#guardian_num").val();
			var prt_password = $("#prt_password").val();
			var icNum = $("#icNum").val();
			var mobile_no = $("#mobile_no").val();
			var address = $("#address").val();
			var address2 = $("#address2").val();
			var address3 = $("#address3").val();
			var address4 = $("#address4").val();
			var car_plate = $("#car_plate").val();
			
			var car_plate = $("#car_plate").val();
			
			$.ajax({
			  type: "POST",
			  data: {
				prt_name : prt_name,
				guardian_num : guardian_num,
				prt_password : prt_password,
				icNum : icNum,
				mobile_no : mobile_no,
				address : address,
				address2 : address2,
				address3 : address3,
				address4 : address4
			  },
			  url: "register3.php",
			/*   success: function(data){ */
			 success: function(){ 
			   alert("Successfull!");
			  }
			});
		});
	});
	
</script>
</head>
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
<center>	
<div class="content">
<form action="" method="post" id="register">
<h2>Parents</h2>
  
    <label>Name</label><br>
    <input class="input" type="text" name="prt_name"   id="prt_name"  placeholder="Parents' Name" required autofocus><br>

    <label>ID</label><br>
    <input class="input" type="text" name="guardian_num" id="guardian_num" placeholder="Parents' Identification Number"><br>
	
	<label>Password</label><br>
    <input class="input" type="text" name="prt_password"  id="prt_password"  placeholder="Parents' Password"><br>
	
	<label>Identification Card Number</label><br>
    <input class="input" type="text" name="icNum"  id="icNum"  placeholder="Parents' IC"><br>
	
	<label>Mobile Phone Number</label><br>
    <input class="input" type="text" name="mobile_no"  id="mobile_no" placeholder="Phone Number"><br>
	
	<label>Address & Street</label><br>
    <input class="input" type="text" name="address" id="address" placeholder="Address"><br>
	
	<label>City</label><br>
    <input class="input" type="text" name="address2" id="address2" placeholder="Address"><br>
	
	<label>Postcode</label><br>
    <input class="input" type="text" name="address3" id="address3"placeholder="Address"><br>
	
	<label>State</label><br>
    <input class="input" type="text" name="address4" id="address4" placeholder="Address"><br>
	
	<label>Car Plate Number</label><br>
    <input class="input" type="text" name="car_plate" id="car_plate" placeholder="Car Plate Number"><br>
	
	<input class="btn" type="submit" name="submit2"  id="submit2" value="Submit">
  
  </form>
</div>
<span><a href="register.php"><input class="btn" id="register" type="submit" name="submit2" value="Next"></span></center>
</tr>
</center>
<table width="100%;cellpadding="10" cellspacing="10" bgcolor="#54BAB5">

<tr><td><center><span style="font-size:12px;color:#ffffff;font-family:arial;">
<h3>DAD FINAL PROJECT</h3> 
<strong>PREPARED BY : <br>
SYAFIQ | USRI | NASRUL | NAJIHAH
<br>B031710135 | B031710085 | B031710113 | B031710095<br>
<br>SEMESTER 18/19  <br>

</body>
</html>