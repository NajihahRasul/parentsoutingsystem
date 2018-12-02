<?php
	include ('connectdb.php');
	
	if (isset($_POST['prt_name'])){
		$prt_name = $_POST['prt_name'];
		$guardian_num = $_POST['guardian_num'];
		$prt_password = $_POST['prt_password'];
		$icNum = $_POST['icNum'];
		$mobile_no = $_POST['mobile_no'];
		$address = $_POST['address'];
		$address2 = $_POST['address2'];
		$address3 = $_POST['address3'];
		$address4 = $_POST['address4'];
		$car_plate = $_POST['car_plate'];
		
		
		$sql = mysqli_query($conn,"INSERT INTO parents (prt_name, guardian_num, prt_password, icNum, mobile_no, address, address2, address3, address4, car_plate) VALUES ('$prt_name', '$guardian_num', '$prt_password', '$icNum', '$mobile_no', '$address', '$address2', '$address3', '$address4', '$car_plate')");
		
		/* if($sql == TRUE){ */
			
		if($sql){
			/* echo '<script language="javascript">';
			echo 'alert("Your registration are Successfully");';
			echo 'window.location.href="register2.php";';
			echo '</script>'; */
			
		}/* else{
			echo "Error : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close(); */
	}
	?>