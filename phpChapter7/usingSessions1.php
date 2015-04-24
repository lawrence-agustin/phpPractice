<?
	#STARTING A SESSION
	session_start();	#this must be the very first thing if the script


	session_regenerate_id();
	echo "Session has been started.<br> Your session_id is ".session_id()."<br>";
	require('ErrorHandlers.php');
?>

<!DOCTYPE html>

<html>
	<body>
		<?php
			$_SESSION["fname"]="lawrence";
			$_SESSION["lname"]="agustin";
			
			echo "Session variables are set";

			session_destroy();
			echo "<br><br>The session has been destroyed.";
		?>

	</body>

</html>