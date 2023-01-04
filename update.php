<html>
<body background="frame6.jpg" style="color:#4CAF50" >
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST['ID'];
$pwd = $_POST['pwd'];
echo "<button onclick= \"location.href='login1.html'\">Logout</button><br>";
$sql = "UPDATE `login` SET `ID`='$id',`PASSWORD`='$pwd' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<br> Password updated successfully<br>";
	
    }
	 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>