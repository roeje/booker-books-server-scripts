<?php
	$servername = "cis.gvsu.edu";
	$username = "roe";
	$password = "roe3202";
	$dbname = "roe";	

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

	// sql to create table
	$sql = "CREATE TABLE books (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	email VARCHAR(30) NOT NULL,
	isbn VARCHAR(30) NOT NULL	
	)";
	

	if ($conn->query($sql) === TRUE) {
	    echo "Table books created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}	

	$conn->close();
?>