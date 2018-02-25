<?php
include 'config.php';

$name	= $_POST['name'];
$email 	= $_POST['email'];
$phone 	= $_POST['phone'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$pass = $_POST['password'];
$f=false;
 $errMsg1=$errMsg2=$errMsg3=$errMsg4="";
 if(is_numeric($phone) == false)
  {
	  $errMsg1=  " Please enter only numeric values as Mobile number.";
       $f=true;
}
  if(strlen($phone)<10)
  {
	  $errMsg2=  "Mobile Number should be of ten digits.";
        $f=true;
  }
  if( strlen($pass) < 6 ) 
	{
		$errMsg3= "Password must be atleast of 6 characters.";
	    $f=true;
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
      {
	$errMsg4= "Only letters and white space allowed in name.";
    $f=	true;
     }
	 
if($f==true)
{  echo "<script>alert('$errMsg1$errMsg2$errMsg3$errMsg4');window.location='register.html';</script>";
}
else
{
$insert_registration=mysql_query("Insert into applicants values('$name','$email','$phone','$branch','$year','$pass','0','','','','','','','','','','')");
mysql_query("INSERT INTO flag values('$email','','','','','','','','','','')");
	if($insert_registration){
        echo "<script>alert('You are now registered. Wishing you best of luck for the event. ');window.location ='login.html';</script>";    }
	else{
echo "<script>alert('Error occured. Please try again.This Email ID is already registered.');window.location ='register.html';</script>";
    }
}
    
?>