<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$dbname="fortis"; // Database name 
$tbl_name="register"; // Table name 

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$conn = new mysqli($host, $username, $password, $dbname);
//mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
//$result=mysql_query($sql);
$result = $conn->query($sql);
// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($result->num_rows > 0){

// Register $myusername, $mypassword and redirect to file "login_success.php"
while($row = $result->fetch_assoc()) 
	{session_start();
	$_SESSION["image"]=$row['image'];
	$_SESSION["name"]=$row['name'];
	
	$_SESSION["dob"]=$row['dob'];
	$_SESSION["email"]=$row['email'];
	$_SESSION["phone"]=$row['phone'];
	$_SESSION["address"]=$row['address'];
	$_SESSION["city"]=$row['city'];
	$_SESSION["pin"]=$row['pin'];
	$_SESSION["history"]=$row['history'];
	


 }
header("location:profile.php");
}
else {
echo "Wrong Username or Password";
}
?>