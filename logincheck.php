<?php
session_start();
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$que=mysql_query("SELECT * FROM applicants WHERE email='".$email."' AND password='".$pass."'") or die("Could not execute query");
$cou=mysql_num_rows($que);
$value=mysql_fetch_array($que);
//$count=$value['count'];
//$name=$value['Name'];
if($cou == 0)
{
	echo "<script>alert('Sorry. Wrong email-id or password. Please try again ');window.location ='login.html';</script>"; 
	
}
else
{
	//$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['password']=$pass;
	//$_SESSION['count']=$count;

	$path = "Location: main.php";
	header($path);
}

?>
