<html>
	<body>
	
	<?php
	
	$db = pg_connect('host=127.10.01.2 user=adminjaavkik password=RSjXYyeCyNyc dbname=sweworkspace');
	
	$studentName = pg_escape_string($_POST['studentName']);
	$firstAndLast = explode(" ", $studentName);
	echo $firstAndLast[0];
	echo $firstAndLast[1];

	$studentPhone = pg_escape_string($_POST['studentPhone']);
	$studentId = pg_escape_string($_POST['studentId']);
	
	
	$studentGPA = pg_escape_string($_POST['studentGPA']);
	
	$query = "INSERT INTO Applicant(FirstName, LastName, phone, GPA) VALUES(' " . $firstAndLast[0] . "' , '" . $firstAndLast[1] . "' , '" . $studentPhone . "' , '" . $studentID . "' , '" . $studentGPA . "')"; 
	$result = pg_query($query);
	
	if (!$result) {
		$errormessage = pg_last_error();
		echo "Error with query: " . $errormessage;
		exit();
	}
	pg_close();
	
	//U = undergrad
	//G = grad
	
	?>
	
	</body>
</html>
	
	