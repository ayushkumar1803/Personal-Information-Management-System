<html>
<head><style>
html { 
  background: url(frame6.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style></head>
<body style text="#FFFFFF" >
<?php
 $conn = mysqli_connect('localhost', 'root','') or die("cannot connect"); 
 mysqli_select_db($conn,'personal information') or die("cannot select DB");	
 if (isset($_POST['ID']) and isset($_POST['pwd']))
 {
    $ID = $_POST['ID'];	
    $pwd = $_POST['pwd'];
    if ($ID=='0' && $pwd == 'admin')	
    {
	    echo "<div align = 'right'><button onclick= \"location.href='loginadmin.html'\">Logout</button></div>";

    
		echo "<center><br><br>RECORDS: <br></center>";
		$sql = "SELECT * FROM `info ";
		$result = $conn->query($sql);

			if ($result->num_rows > 0) {
  				
    			while($row = $result->fetch_assoc()) {
        			
					echo "<center><table border=5>";
					echo "<br><br><tr><td>ID: </td>". "<td>".$row["ID"]. "</td></tr><tr><td> Name: </td><td>". $row["NAME"]. "</td></tr><tr><td>Mobile: </td><td>" . $row["MOBILE"] ."</td></tr><tr><td>D.O.B : </td><td>" . $row["DATE_OF_BIRTH"] ."</td></tr><tr><td>ADDRESS: </td><td>" . $row["ADDRESS"] . "</td></tr><tr><td>EMAIL: </td><td>" . $row["EMAIL"] ."</td></tr><tr><td>FATHER: </td><td>" . $row["FATHER"] ."</td></tr><tr><td>MOTHER: </td><td>" . $row["MOTHER"] ."</td></tr><tr><td>GENDER: </td><td>" . $row["GENDER"] ."</td></tr><tr><td>NATIONALITY: </td><td>" . $row["NATIONALITY"] ."</table ></td></tr></center>";
    			}
				
	
			}
			else {
    			echo "0 results";
			}
	}
 else
 {
 	echo "<center><h2>Invalid ID(or)PASSWORD<br></h2><h3> Please try again!</h3><button onclick= \"location.href='loginadmin.html'\">Try again</button></center>";
 }
}
?>
</body>
</html>