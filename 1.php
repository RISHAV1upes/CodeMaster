<?php
include 'config.php';
session_start();
$q=mysql_query("SELECT q1 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);

$answer=mysql_query("SELECT q1 FROM `applicants` WHERE email='".$_SESSION['email']."'");
$ans1=mysql_num_rows($answer);
$ans2=mysql_fetch_array($answer);


if(isset($_SESSION['email'])&& $val[0]==0)
{?>

<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  //Disable cut copy paste
  $('body').bind('cut copy paste', function (e) {
    e.preventDefault();

  });
  
  //Disable mouse right click
  $("body").on("contextmenu",function(e){
    return false;
  });
});
</script>
<title>Code Master|| UPES-CSI</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/maincss.css">
<link rel="shortcut icon" href="favicon.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="analytics.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>

<script src="js/includes.js"></script>
    
   <script>
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }
if ( minutes==0 && seconds == 0) {
            alert('Time Up ! Thankyou. ');window.location ='main.php'; 
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 20,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
    </script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a><img src="cm1.png" style="width:80px;height:80px;"><span>Code Master</span></a>
			</div>
      <div class="header-right">
      <a class="account" href="main.php">Back</a>
			<a class="account" href="logout.php">Logout</a>
      </div>
	</div>
</div>
</div>
<div align="right">Time Left : <span id="time">20:00</span> minutes!</div>
<div class="categories">
<div class="container">
<h3 style="color:;font-family:Times New Roman;">Question 1:-<br>Create a basic html form with the following login credentials.<br>Name, SapId, email, password provided with a login button.<br>
Pass this information to a second page, validate using php.<br>Without using any variables or superglobals, embed the information in the user’s 
computer and print the following sentence “ Hello, *Name* you sapid = *SapId*, email = *email*. “ in a alert box.The page should run for only 5 mins from login.
The second page should provide a logout button which redirects the user to the previous page.
Any user shouldn’t be able to access the second page without  inputting the login credentials.
</h3><br>
<form class="" action="q1.php" method="post">
  <div class="form-group"> 
    <label for="txtarea1" class="col-sm-2 control-label"><h3>Answer</h3></label>
	
    <div class="col-sm-8" id="col-sm-10"  style="height:310px;font-size:20px;"  > </div>
    <div class="col-sm-10">
	<textarea name="txtarea"  type="hidden" id="txtarea1" cols="50" rows="10000000" class="form-control1" style="display:none;"><?php echo $ans2[0]; ?></textarea></div>
   
  <button type="submit" value="submit" name="sub" class="col-sm-offset-10" style="font-size:130%;margin-top:25px;">Submit Code</button><br><br>
  </div>
</form>

</div>
</div>



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
			<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        
    var editor = ace.edit("col-sm-10");
    editor.setTheme("clouds");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.getSession().on('change', function () {
      document.getElementById("txtarea1").value= editor.getSession().getValue(); 
 
   });

   document.getElementById("txtarea1").value=editor.getSession().getValue();
    
</script>

<script>
function show_alert() {
    document.getElementById("txtarea1").value= editor.getSession().getValue(); 

</script>

</body>
</html>
<?php
}
else if((!isset($_SESSION['email'])&& $val[0]==0))
{
	echo "<script>alert('File not found ');window.location ='index.php';</script>"; 
}
else
{
echo "<script>alert('Already Attempted. Thankyou. ');window.location ='main.php';</script>"; 
}


?>
