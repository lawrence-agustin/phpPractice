
<?php
	require('ErrorHandlers.php');
	$name = $_POST["name"];
	$age = $_POST["age"];
	$job = $_POST["job"];

	echo "Name: ".$name."<br>Age: ".$age."<br>Job: ".$job;
?>