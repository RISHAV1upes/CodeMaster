<?php
include 'config.php';
session_start();
$q=mysql_query("SELECT q9 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);
$a9	= $_POST['txtarea'];
if(isset($_POST['sub']))

{
	
    $up =mysql_query("UPDATE `flag` SET `q9` = '1' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
    $sql = mysql_query("UPDATE `applicants` SET `q9` = '$a9' WHERE email='".$_SESSION['email']."'");
    if($sql)
	{
        echo "<script>alert('Your answer is recorded ');window.location ='main.php';</script>";    
	}
	else
	{
		
        $up =mysql_query("UPDATE `flag` SET `q9` = '0' WHERE `flag`.`Email` = '".$_SESSION['email']."'");
        echo "<script>alert('Error occured. Please try again.');window.location ='9.php';</script>";
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