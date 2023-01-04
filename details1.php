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

$id=$_POST['ID'];
$blood=$_POST['blood'];
$aadhar=$_POST['aadhar'];
$pan=$_POST['pan'];
$dl=$_POST['dl'];

echo "Hello!<br>";
$sql = "INSERT INTO other (`ID`, `BloodGroup`, `AadharNumber`, `PANCard`, `DrivingLicense`)
VALUES ('$id', '$blood', '$aadhar','$pan','$dl')";
if ($conn->query($sql) === TRUE) {
    echo "<br>Created successfully<br>";
}
else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   // echo "<br>";
    //echo "<button  onclick= \"location.href='details1.html'\">Next</button> ";
    $conn->close();
    ?>
    </body>
    </html>
