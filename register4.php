
<?php
	include ('connectdb.php');
	
	if (isset($_POST['std_name'])){
		$std_name = $_POST['std_name'];
		$student_id = $_POST['student_id'];
		$guardian_num = $_POST['guardian_num'];
		$std_password = $_POST['std_password'];
		$std_class = $_POST['std_class'];
		$ic_num = $_POST['ic_num'];
		$hostel_room = $_POST['hostel_room'];
		$home_address = $_POST['home_address'];
		$home_address2 = $_POST['home_address2'];
		$home_address3 = $_POST['home_address3'];
		$home_address4 = $_POST['home_address4'];
		
		$sql = mysqli_query($conn,"INSERT INTO students (std_name, student_id, guardian_num, std_password, class, ic_num, hostel_room, home_address, home_address2, home_address3, home_address4) VALUES ('$std_name', '$student_id', '$guardian_num', '$std_password', '$std_class', '$ic_num', '$hostel_room', '$home_address', '$home_address2', '$home_address3', '$home_address4')");
		
		/* if($sql == TRUE){
			echo '<script language="javascript">';
			echo 'alert("Your registration are Successfully");';
			echo '</script>';
			
		}else{
			echo "Error : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close(); */
	}
	?>
