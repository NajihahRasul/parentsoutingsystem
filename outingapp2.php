<?php
	include ('connectdb.php');
	
	if (isset($_POST['std_name'])){
		$std_name = $_POST['std_name'];
		$student_id = $_POST['student_id'];
		$guardian_num = $_POST['guardian_num'];
		$state = $_POST['state'];
		$icNum = $_POST['icNum'];
		$prt_name = $_POST['prt_name'];
		$date = $_POST['date'];
		
		$sql = mysqli_query($conn,"INSERT INTO outing (std_name, student_id, guardian_num, state, icNum, prt_name, date) VALUES ('$std_name', '$student_id', '$guardian_num', '$state', '$icNum', '$prt_name', '$date')");
		
		if($sql == TRUE){
			/* echo '<script language="javascript">';
			echo 'alert("Your outing application has been submit");';
			echo 'window.location.href="viewApps.php";';
			echo '</script>';
			 */
		}/* else{
			echo "Error : " . $sql . "<br>" . $conn -> error;
		}
		$conn -> close(); */
	}
?>