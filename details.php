<html>
    <head>
</head>
<title>DETAILS</title>
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
$highb=$_POST['HighSchool'];
$highm=$_POST['HighSchoolMarks'];
$highy=$_POST['HighSchoolYear'];
$intb=$_POST['Intermediate'];
$intm=$_POST['IntermediateMarks'];
$inty=$_POST['IntermediateYear'];
$gra=$_POST['Graduation'];
$gram=$_POST['GraduationPercentage'];
$gray=$_POST['GraduationYear'];

echo "Hello !<br>";
$sql = "INSERT INTO academic (`ID`, `HighSchool`, `HighSchoolMarks`, `HighSchoolYear`, `Intermediate`, `IntermediateMarks`, `IntermediateYear`, `Graduation`, `GraduationPercentage`, `GraduationYear`)
VALUES ('$id', '$highb', '$highm','$highy','$intb','$intm','$inty','$gra','$gram','$gray')";
if ($conn->query($sql) === TRUE) {
    echo "<br>Created successfully<br>";
}
else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>";
    echo "<button  onclick= \"location.href='details1.html'\">Next</button> ";
    $conn->close();
    ?>
    </body>
    </html>