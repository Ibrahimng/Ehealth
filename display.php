<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fortis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each 
	 echo "<table border=2><tr><th>name</th><th>image</th><th>email</th><th>phone</th><th>Address</th><th>City</th><th>Medical History</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row["name"]."</td>"."&emsp;&emsp;&emsp;"."<th><img src='$row[image]' height=300px width=500px"."/></th>";
		 echo "<td>".$row["email"]."</td>"."&emsp;&emsp;&emsp;"."<th>".$row["phone"] ."</th>";
		 echo "<td>".$row["address"]."</td>"."&emsp;&emsp;&emsp;"."<th>".$row["city"] ."</th>";
		 echo "<td>".$row["history"]."</td></tr>";
		 
		 
		 
     }
	 echo"</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>