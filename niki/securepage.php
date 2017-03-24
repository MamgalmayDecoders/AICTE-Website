<?php
  session_start();

   $var="hy";
echo $var."<br>";

 if($_SESSION['sid']==session_id())
	{

if($_SESSION['logged']==true){ 
        echo $_SESSION["username"];}
		echo"<br>";
		echo "<a href='logout.php'>Logout</a>";
	}
?>