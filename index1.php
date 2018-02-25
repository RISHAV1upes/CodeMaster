
<doctype>
<html>
<title>Member Page|| UPES-CSI</title>
<head>
     
        <link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="css/indexcss.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="footer/css/style.min.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type='text/javascript'>
   function displayForm(c) {
    if (c.value == "2") {    
        jQuery('#paypalformContainer').toggle('show');
        jQuery('#ccformContainer').hide();
    }
        if (c.value == "1") {
         jQuery('#ccformContainer').toggle('show');
         jQuery('#paypalformContainer').hide();
    }
};
</script>
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
				     <div class="nav navbar-nav navbar-left ">
					 <a href="http://www.upescsi.in"><img style="width:85px;height:70px;" src="favicon.png"></a>
					 </div>
				     
					<ul class="nav navbar-nav navbar-right " style="text-align:center">
						<li class="active"><a class="scroll-link" href="#" style="font-family:Times New Roman;font-size:130%;">New Register</a></li>

					</ul>
				</div>
			</div>
		</nav>
		
		
	<form style="margin-top:100px">
    <input value="1" type="radio" name="formselector" onClick="displayForm(this)"></input>1 Year Membership
    <form id="ccform" class="form-horizontal">
	<div style="display:none"  id="ccformContainer">
	 <form id="ccform"> 
        <label>XYZ :</label>
        <br>
        <br>
        <dd>
            <p>ABC :
                <input type="text" id="ccname" name="ccname" value="$ccname">
            </p>
            <p>PQR :
                <select name="cctype" required>
                    <option value="Visa">CCVT</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="American Express">American Express</option>
                    <option value="Discover">Discover</option>
                    <option value="Diners Club">Diners Club</option>
                    <option value="Maestro">Maestro</option>
                    <option value="Verified By Visa">Verified By Visa</option>
                    <option value="Visa Electron">Visa Electron</option>
                </select></P>
                <!--<p>Credit Card Number :
                    <input type="text" minlength="16" id="ccnumber" name="ccnumber" value="$ccnumber">
                </p>-->
                <p>BCD : UVW :
                    <select name="ccexpdatemonth" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select> <span>FGH : <select name="ccexpdateyear" required>
                <option value="2015">20</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                </select></span>

                    <!--<p>Credit Card CVC :
                        <input type="text" minlength="3" id="cccvc" name="cccvc" value="$cccvc">
                    </p>-->
         
        </dd>
        <form>
    </div>
    <br>
    <input value="2" type="radio" name="formselector" onClick="displayForm(this)"></input>4 Year Membership
    <div style="display:none" id="paypalformContainer">
        <form id="paypalform">
        <label> Details</label>
        <br>
        <br>
        <dd>xyz :
            <input type="text" id="paypal" name="paypal" value="$pay">
        </dd>
        </form>
    </div>

    <div id="float_right">
        <input type="submit" name="submit3" value="Pay Now">
    </div>
</form>
		
		
<!------------------footer---->
<div class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <p>©UPES-CSI. All Rights Reserved</p>
            </div>
            <div class="col-sm-12 col-md-5">
                <ul class="social-media">
                    <li class="social-icons"><a href="https://www.facebook.com/upescsi" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li class="social-icons"><a href="https://www.instagram.com/upescsi" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="social-icons"><a href="https://www.twitter.com/upescsi" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    
                </ul>
			</div>
               
		</div>
	</div>
</div>


<!------------------footer------>


</body>
</html>