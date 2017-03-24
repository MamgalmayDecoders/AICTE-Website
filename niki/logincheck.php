
<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csv_db";


$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 






$uid = $_POST['Username'];
$pw = $_POST['Password'];

echo $uid;

$passquery="SELECT password FROM login  WHERE username='$uid'";







$getpass = $conn->query($passquery);
$pass = $getpass->fetch_assoc();



echo"<br>";


$namequery="SELECT name FROM login  WHERE username='$uid'";
$getname = $conn->query($namequery);
$name = $getname->fetch_assoc();

$Activeuser= $name['name'];






if( $pw == $pass['password'])
{	
	session_start();
 $_SESSION['logged']=true;
  $_SESSION ['username']=$Activeuser;
echo"done";
	$_SESSION['sid']=session_id();
	header("Location:securepage.php");

}
else{

echo"wrong username and password please try again";






$sql = "SELECT name FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo"<br>";
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. "<br>";
    }
}

}


 mysql_close($conn);
?>