
<doctype>
<html>
<title>Code Master || UPES-CSI</title>
<head>
     
        <link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="css/indexcss.css">
		<script src="analytics.js"></script>
        <link rel="stylesheet" href="assets/css/media-queries.css">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
</head>


<?php

 require_once 'functions/function.php';
 getpart('header');?>
 <body id="bootstrap-overrides">

		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse" id="top-navbar-1">
				     <div class="nav navbar-nav navbar-left hidden-xs">
					 <a href="http://www.upescsi.in"><img style="width:85px;height:70px;" src="favicon.png"></a>
					 </div>
				     
					<ul class="nav navbar-nav navbar-right " style="text-align:center">
						<li class="active"><a class="scroll-link" href="#" style="font-family:Times New Roman;font-size:130%;">Home</a></li>
                        <li class="active"><a class="scroll-link" href="#rules" style="font-family:Times New Roman;font-size:130%;">Rules</a></li>
						<li class="active"><a class="scroll-link" href="#con" style="font-family:Times New Roman;font-size:130%;">Contact</a></li>
						<li><a class="scroll-link" href="login.html" style="font-family:Times New Roman;font-size:130%;">Login </a></li>
						<li><a  href="http://forum.upescsi.in" target="_blank" style="font-family:Times New Roman;font-size:130%;" >Forum</a></li>


					</ul>
				</div>
			</div>
		</nav>

        <!-- Page title -->
		 <section id="home-section" class="home-section full-screen" style="background-image: url('b2.jpg'); background-size:cover;">
                <div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
                 <img src="cm.png" style="position:relative;bottom: 150px;height:150px;width:200px;">
            	<h1 style="font-size:550%;position:relative;bottom: 100px;font-family: Goudy Old Style;color:black;"><b>CODE Master</b></h1><br>
            	<p style="position:relative;bottom: 100px;font-family:Brush Script MT,cursive;color:black;font-size:250%;">Register with us for unique coding event experience</p></font>
              <center>
              <br>
            	<a href="register.html"><button class="action-button shadow animate blue" style="width:auto;position:relative;left:235px;bottom:100px">REGISTER</button></a>
            </center>
     </div>
     </div>
  <br><br>
</section>


<?php 
 if(isset($_SESSION['name']))
 getpart('login');
 else?>
 <div id="rules" align="center" class="heading">
      <a style="font-family:Times New Roman"><span>UPES-CSI</span> <span style="color:blue;">Student Chapter</span></a>
    </div>
<br>
<h1 align="center" style="color:#f3c500;font-family:Times New Roman;text-transform:none;">Code Master</h1><br>
<h3 style=" margin-left: 60px; margin-right: 60px; color:#01a185;font-family:Times New Roaman;font-size:170%;">
<br>Please read all the rules and instruction carefully:<br></h3>
<h4 style=" margin-left: 60px; margin-right: 30px;font-family:Times New Roaman;font-size:150%;color:blue;"><br>1. All codes would be typed in the text area and can be done in any langauge .<br><br>

2. The alloted time framework for each questions is attached here.<a style="color:red;font-family:Times New Roaman;font-size:120%;text-decoration:none;" href="images/time.pdf" target="_blank">Click here</a><br><br>


3.Each question is allowed to submit only once.<br><br>

4.The codes that have been compiled and submitted will be awarded more marks.<br><br>

5.The codes with correct logic only , but no proper compilation will be considered later.<br><br>

6. The most correct approach to the problem will be awarded the highest marks.<br><br>

7. Final discretion is of the organizer.<br><br>


</h4>
 <div id="con">
 <h3 align="right" style="margin-right: 40px;font-family:Times New Roman;text-transform:none;"><br>
&nbsp;For Technical Issues contact:<br>Rishav Ranjan,+91 8506866790<br>Prakrit Shisodia,+91 9643700101</h3><br>
</div>







 <?php
 getpart('footer');
?>
</body>
</html>