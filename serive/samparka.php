<?php
	$conn = mysqli_connect('localhost', 'babagam1_even123', 'babagam1_even123', 'babagam1_even123');
	
	if (!$conn) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
	
	date_default_timezone_set("Asia/Kolkata"); 
?>