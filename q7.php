<?php
include 'config.php';
session_start();
$a7	= $_POST['txtarea'];
$q=mysql_query("SELECT q7 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);
if(isset($_POST['sub']))

{
	
    $up =mysql_query("UPDATE `flag` SET `q7` = '1' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
    $sql = mysql_query("UPDATE `applicants` SET `q7` = '$a7' WHERE email='".$_SESSION['email']."'");
	if($sql)
	{
        echo "<script>alert('Your answer is recorded ');window.location ='main.php';</script>";   
	}
	else
	{
		
        $up =mysql_query("UPDATE `flag` SET `q7` = '0' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
        echo "<script>alert('Error occured. Please try again.');window.location ='7.php';</script>";
    }
}
else if(isset($_SESSION['email']))
{
	echo"<script>window.location='main.php';</script>";
}
else
{
	
	 echo "<script>alert('File not found.');window.location ='index.php';</script>";
}
     
?>