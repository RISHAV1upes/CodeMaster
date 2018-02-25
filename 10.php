<?php
include 'config.php';
session_start();
$q=mysql_query("SELECT q10 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);

$answer=mysql_query("SELECT q10 FROM `applicants` WHERE email='".$_SESSION['email']."'");
$ans1=mysql_num_rows($answer);
$ans2=mysql_fetch_array($answer);


if(isset($_SESSION['email']) && $val[0]==0)
{?>

<!DOCTYPE html>
<html>
<head>
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

 <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
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
<h3>Question 10:-<br>If you have 3 rods in a circle, with ’n’ disks in ascending order in one of the rods. You are allowed to move the disks only in the clockwise direction. WAP to calculate how many moves are necessary to move all the disks in the same order from first rod to the third rod ? ( You can only pick one disk at a time, and a larger disk cannot be placed on a smaller disk )
Print the status of all the 3 stacks at every iteration.
</h3><br>
<form class="" action="q10.php" method="post">
  <div class="form-group col-sm-10">
     <div class="row">
	   <div class="col-sm-3">
	   <h3>Choose your Language</h3>
	   </div>
	   <div class="col-sm-9">
	    <div class="language">
		  <select name="langg">
                <option value="C">C</option>
                <option value="CPP">C++</option>
                <option value="JAVA">JAVA</option>
                <option value="PYTHON">PYTHON</option>
          </select>
		 </div>
		</div>
	</div><br>

    <label for="txtarea10" class="control-label col-sm-1" style="margin-right:60px;"><h3>Answer</h3></label>
	<div class="col-sm-10" id="col-sm-10"  style="height:500px;font-size:20px;"  > </div> 
    <div><textarea name="txtarea" type="hidden" class="col-sm-10" id="txtarea10" cols="50" rows="10000000" class="form-control1" style="display:none;"><?php echo $ans2[0]; ?></textarea></div>
    
  <button type="submit" value="submit" name="sub" class="col-sm-offset-10" style="color:;font-size:130%;margin-top:35px;">Submit Code</button><br><br> 
  </div>
  <div class="col-sm-2"><br><br><br><br><button style="font-size:120%;" type="submit" formaction="run.php" formtarget="_blank">Compile And Run</button>
  <br><br>
   <input type=text name="input" placeholder="INPUT"></div>
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
      document.getElementById("txtarea10").value= editor.getSession().getValue(); 
 
   });

   document.getElementById("txtarea10").value=editor.getSession().getValue();
    
</script>

<script>
function show_alert() {
    document.getElementById("txtarea10").value= editor.getSession().getValue(); 

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
echo "<script>alert('Already Attempted. Thankyou. ');window.location ='main.php';</script>"; 


?>
