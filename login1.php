<html>
  <style>
    button{
      margin: auto;
      align:right;
    }
    </style>
<body background="frame6.jpg" style="color: #4CAF50" >
<?php

$conn = mysqli_connect('localhost', 'root','') or die("cannot connect"); 
mysqli_select_db($conn,'personal information') or die("cannot select DB");	//selecting the database
if (isset($_POST['ID']) and isset($_POST['pwd']))  //receiving username, password form html file
{
$ID = $_POST['ID'];	//assigning the received username in variable uname
$pwd = $_POST['pwd'];	//assigning the received password in variable pwd
//selecting username, password from table log
$result = mysqli_query($conn,"SELECT * FROM `login` WHERE ID='$ID' and PASSWORD='$pwd'") or die(mysqli_error()); //searching whether username, password exists in the database
$count = mysqli_num_rows($result);	// if query succeeds then count=1

if ($count == 1)	//if count=1 then username,password exists in db
{
echo "<button onclick= \"location.href='login1.html'\">Logout</button> ";
echo " <button onclick= \"location.href='update.html'\">Change password</button>";
echo "<center>Login successful!<br><br>";
echo "YOUR DETAILS: <br>";
$sql = "SELECT * FROM `info` WHERE ID='$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<table border=1>";
					echo "<br><br><tr><td>ID: </td>". "<td>".$row["ID"]. "</td></tr><tr><td> Name: </td><td>". $row["NAME"]. "</td></tr><tr><td>Mobile: </td><td>" . $row["MOBILE"] ."</td></tr><tr><td>D.O.B : </td><td>" . $row["DATE_OF_BIRTH"] ."</td></tr><tr><td>ADDRESS: </td><td>" . $row["ADDRESS"] . "</td></tr><tr><td>EMAIL: </td><td>" . $row["EMAIL"] ."</td></tr><tr><td>FATHER: </td><td>" . $row["FATHER"] ."</td></tr><tr><td>MOTHER: </td><td>" . $row["MOTHER"] ."</td></tr><tr><td>GENDER: </td><td>" . $row["GENDER"] ."</td></tr><tr><td>NATIONALITY: </td><td>" . $row["NATIONALITY"] ."</td></tr>";
    			}
				echo "</table ></center>";
        echo "<button onclick= \"location.href='details.html'\">Next</button> ";
    }
 else {
    echo "Insufficient data to display";
}
}
else
{
echo "<center><h2>Invalid ID(or)PASSWORD<br></h2><h3> Please try again!</h3><button onclick= \"location.href='login1.html'\">Try again</button></center>";
}
}
?>
</body>
</html>