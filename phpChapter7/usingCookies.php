<?php
	require('ErrorHandlers.php');
	$data = $_POST['word'];
	setcookie('data',$data);
	echo "Value of the cookie is ".$_COOKIE['data']."<br>";
	$selected = $_POST['option'];
	echo "<br>Selected value is ".$selected;

?>