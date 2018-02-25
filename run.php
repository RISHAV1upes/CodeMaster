<?php
//Import the SDK 
include 'sdk/index.php';
session_start();
//Setting up the Hackerearth API
$source = $_POST['txtarea'];
$input= $_POST['input'];
$lang= $_POST['langg'];
$email = $_SESSION['email'];
 
$hackerearth = Array(
		'client_secret' => 'f01c902a6a939ff82a2bdd3e672085d2539d745b', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);
//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$source;    	//(REQUIRED) Your formatted source code for which you want to use hackerEarth api, leave this empty if you are using file
$config['input']=$input;     	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']=$lang;  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
//Sending request to the API to compile and run and record JSON responses
$response = run($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
//echo"<pre>".print_r($response,1)."</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="analytics.js"></script>
    <link rel="shortcut icon" href="favicon.png">
    <title>Code Master|| UPES-CSI</title>
</head>
<body style="background-image:url('b21.jpg'); background-size:cover;">
<!--<div class="header">
		<div class="container">
			<div class="logo">
			     <center>
				<a><img src="cm1.png" style="width:80px;height:80px;"><span>Code Master</span></a></center>
			</div>

	</div>
</div>-->

                 <center><img src="cm.png" style="height:150px;width:200px;"></center>

<br><br><br>
<div align="center" style="font-size:120%"> <b>Compile Status :</b><?php echo $response['compile_status']; ?> </div><br><br>
<div align="center" style="font-size:120%"><b>Language :</b> <?php echo $lang; ?> </div><br><br>
<div align="center" style="font-size:120%"> <b>Time Used :</b> <?php echo $response['run_status']['time_used']; ?> </div><br><br>
<div align="center" style="font-size:120%"><b> Output :</b> <?php echo $response['run_status']['output']; ?> </div>
</body>
</html>