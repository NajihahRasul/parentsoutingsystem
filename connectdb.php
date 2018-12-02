<?php
	$conn = new mysqli('localhost', 'root', '', 'pos');
	if ($conn -> connect_error){
		die("Connection failed : " . $connect_error);
	}
	//echo "connection Successfully";
?>
