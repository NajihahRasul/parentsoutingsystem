<!DOCTYPE html>
<title>LOGIN : POS</title><!--name of page-->
<body><!--declaring of page colour-->
<body background="wallpaper6.jpg">

<style>
 table, th, td{
  text-align:justify;
 }
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #006699;
    color: white;
    padding: 14px 30px;
    margin: 20px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

.reset {
    background-color: #54BAB5;
    color: white;
    padding: 14px 30px;
    margin: 20px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<table width="100%">

	  <td><center>
      <img src="pots.png"alt=""style="width:22%;height:auto;"></center></td>
      </tr>
      </table>
<table width="100%" cellpadding="3" cellspacing="5"  bgcolor="#006699">
	<tr>
    <td><center> <span style="font-size:15px;color:#ffffff;font-family:arial;;letter-spacing:1px;text-align:left;"><strong>WELCOME TO PARENTS OUTING SYSTEM<strong></center>
	</tr>
    </table>
    <br>
    
    <center><table style="width:20%" "float:center" cellpadding="10" cellspacing="10">
<tr>
<br>

<!--declaring of login-->
<form action="" method="post">
 <h2>LOGIN PAGE</h2>
  <div class="container">
    <center><label for="uname"><b>Student ID</b></label><br>
    <input type="text" placeholder="Enter Student ID" name="student_id" required></center><br>

    <center><label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="std_password" required></center><br>
        
    <center><button type="submit" name="submit">Login</button></center>
	<center><button type="reset" class="reset" name="reset">Reset</button></center>
	
  </div>
</form>

<?php
		
		session_start();
		if(isset($_POST['submit'])){
			
			$_SESSION['student_id'] = $_POST['student_id'];
			$_SESSION['std_password'] = $_POST['std_password'];
			
			include ('connectdb.php');
			
			$sql = "SELECT * FROM students WHERE student_id = '".$_SESSION['student_id']."' AND std_password='".$_SESSION['std_password']."'";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_array($result))
			{
				if (row == TRUE) {
					echo '<script language="javascript">';
					echo 'alert("Login Success");';
					echo 'window.location.href="std_home.php";';
					echo '</script>';
					
				}else{
					echo '<script language="javascript">';
					echo 'alert("Login Error");';
					echo '</script>';
				}
			
		}
		$conn -> close();
	}
	?>
			

</table>
<br>
</form>
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