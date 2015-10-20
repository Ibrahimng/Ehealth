<?php
session_start();
if(isset($_SESSION["email"]))
{
$user='root';
$pass='';
$db='fortis';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
session_unset();
session_destroy();
header('Location: index.html');
}
?>