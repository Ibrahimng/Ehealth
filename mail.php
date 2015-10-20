<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "no-reply@fortis.com";
  $email = $_POST['email'];
  
  //Subject 
  $subject="Reply:Welcome to Fortis Health Care Centre";

  //Comment
  $comment="Thank you $name for registering on our website\n you can book appointments, view your history/reports online.";

  //send email
  mail($email,$subject ,$comment, "From:" . $admin_email);
  
  //Email response
  echo "<center><h1>Thank you for contacting us!</h1></center><hr><br>";
  echo "<center><h2>Check your mails for our updates</h2></center><hr>";
  
}
  

?>