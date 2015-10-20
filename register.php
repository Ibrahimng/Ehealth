<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "fortis";
$prefix = "";

$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
mysql_select_db($mysql_database,$con) or die("Could not select database");

$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['phone'])){$phone=$_POST['phone'];}
$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
if(isset($_POST['history'])){
$history=$_POST['history'];}
if(isset($_POST['mail_list'])){
$mail_list=$_POST['mail_list'];}
 function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["img"]["name"])) 
{

	$temp_name=$_FILES["img"]["tmp_name"];
	$imgtype=$_FILES["img"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=$_FILES["img"]["name"];
	$target_path = "C:/xampp/htdocs/fortis/uploaded-images/".$imagename;
	
	//echo "$target_path";
	
	$r="uploaded-images/".$imagename;
	//echo $r;
if(move_uploaded_file($temp_name, $target_path)) 
{
mysql_query("INSERT INTO register(name,image, dob, email,password, phone, address, city, pin, history)VALUES('$name','$r','$dob', '$email','$password','$phone','$address', '$city', '$pin','$history')");
if(isset($_POST['mail_list']))
{
mysql_query("INSERT INTO mail_list(email)VALUES('$email')");
}
{
  
  //Email information
  $admin_email = "no-reply@fortis.com";
 // $email = $_POST['email'];
  
  //Subject 
  $subject="Welcome to Fortis Health Care Centre";

  //Comment
  $comment="Thank you $name for registering on our website\n you can book appointments, view your history/reports online.";

  //send email
  mail($email,$subject ,$comment, "From:" . $admin_email);
  
  //Email response
  
}
echo "<center>"."<img src='$r' height=500px width=700px "."/>".'<h1 style="padding-top:100px;font-size:50pt;" >'."Congratulations: ".'<i style="color:#006699;text-decoration:overline;">'."$name"."</i>"."<br>".'<b style="color:green">'." Successfully Registered !!!"."</b>"."</h1>"."</center>";

echo "<center><h1>"."go back to home page ->".'<a href="http://localhost:8080/fortis/index.html">'."home"."</a>"."</h1></center>";
}else
	  {
	  echo "insertion error";
	  }
}


/*
if(move_uploaded_file($temp_name, $target_path)) 
{
	   
	   if($result=mysql_query("INSERT INTO artifacts VALUES('".$aid."','".$an."','".$ad."','".$bp."','".$bg."','".$cbp."','".$cbg."','0','1','','','".$target_path."')"))
	  { 
			echo "Entered data successfully\n";
	  }
	  else
	  {
	  echo "insertion error"
	  }
	
}
else
{

   exit("Error While uploading image on the server");
} 
*/

//$pic=$_POST['pic'];
//$username=$_POST['username'];
//$password=$_POST['password'];
//header("location: index.php?remarks=success");
mysql_close($con);

 //  header( 'Location:http://localhost:8080/fortis/index.html' ) ;
?>;