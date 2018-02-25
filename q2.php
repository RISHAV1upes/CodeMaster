<?php
include 'config.php';
session_start();
$q=mysql_query("SELECT q2 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);
$a2	= $_POST['txtarea'];
if(isset($_POST['sub']))
{
	
    $up =mysql_query("UPDATE `flag` SET `q2` = '1' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
    $sql = mysql_query("UPDATE `applicants` SET `q2` = '$a2' WHERE email='".$_SESSION['email']."'");
    if($sql)
	{
        echo "<script>alert('Your answer is recorded ');window.location ='main.php';</script>";    
	}
	else
	{
		
        $up =mysql_query("UPDATE `flag` SET `q2` = '0' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
        echo "<script>alert('Error occured. Please try again.');window.location ='2.php';</script>";
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