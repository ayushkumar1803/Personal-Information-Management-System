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
$name = $_POST['NAME'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$dad = $_POST['dad'];
$mom = $_POST['mom'];
$sex = $_POST['sex'];
$nat = $_POST['nat'];
$pwd = $_POST['pwd'];
echo "<button onclick= \"location.href='login1.html'\">Logout</button><br>";
$sql = "INSERT INTO info (`ID`, `NAME`, `ADDRESS`, `DATE_OF_BIRTH`, `EMAIL`, `MOBILE`, `FATHER`, `MOTHER`, `GENDER`, `NATIONALITY`)
VALUES ('$id', '$name', '$address','$dob','$email','$mob','$dad','$mom','$sex','$nat')";
$sqll = "INSERT INTO `login` (`ID`, `PASSWORD`) VALUES ('$id', '$pwd');"; 
if ($conn->query($sql) === TRUE and $conn->query($sqll) === TRUE ) {
    echo "<br>Created successfully<br>";
	echo "YOUR DETAILS: <br>";
$sql = "SELECT * FROM `info` WHERE ID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<center><table border=1>";
					echo "<br><br><tr><td>ID: </td>". "<td>".$row["ID"]. "</td></tr><tr><td> Name: </td><td>". $row["NAME"]. "</td></tr><tr><td>Mobile: </td><td>" . $row["MOBILE"] ."</td></tr><tr><td>D.O.B : </td><td>" . $row["DATE_OF_BIRTH"] ."</td></tr><tr><td>ADDRESS: </td><td>" . $row["ADDRESS"] . "</td></tr><tr><td>EMAIL: </td><td>" . $row["EMAIL"] ."</td></tr><tr><td>FATHER: </td><td>" . $row["FATHER"] ."</td></tr><tr><td>MOTHER: </td><td>" . $row["MOTHER"] ."</td></tr><tr><td>GENDER: </td><td>" . $row["GENDER"] ."</td></tr><tr><td>NATIONALITY: </td><td>" . $row["NATIONALITY"] ."</td></tr>";
    			}
				echo "</table ></center>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>