<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginsignup";

	$fname = $_POST['filfirst'];
	$lname = $_POST['fillast'];
	$mname = $_POST['filmid'];
	$pwdd = $_POST['filpass'];
	$gendr = $_POST['filgender'];
	$bday = $_POST['filbirth'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO users '.
      '(fname,lname, emp_salary, join_date) '.
      'VALUES VALUES('','$fname','$lname','$mname','$pwdd','$gendr','$bday')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
