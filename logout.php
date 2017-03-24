
<?php

	echo "Logged out scuccessfully";
    
    session_start();
	session_destroy();
header("location:log.php");
echo"logged out successfully";
	

?>