<?php
	session_start();
	require('ErrorHandlers.php');
?>

<!DOCTYPE html>

<html>
	<body>
		<?php
			echo "First Name is: ".$_SESSION["fname"]."<br>";
			echo "Last Name is: ".$_SESSION["lname"]."<br><br>"; 

			#another way to show $_SESSION variables
			#var_dump($_SESSION);


			#NOTE: you must remove and destroy session after it has been used for SECURITY
			session_unset(); #removes all session vars
			session_destroy(); #destroys the session
			var_dump($_SESSION);

		?>
	</body>
</html>