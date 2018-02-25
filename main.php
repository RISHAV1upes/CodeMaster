<?php
include 'config.php';
session_start();
$n= mysql_query("SELECT `name` FROM `applicants` WHERE `email` = '".$_SESSION['email']."'");
$value=mysql_fetch_array($n);
$name=$value['name'];
$c= mysql_query("SELECT `count` FROM `applicants` WHERE `email` = '".$_SESSION['email']."'");
$value1=mysql_fetch_array($c);

if($value1[0]==0)
{
	$up =mysql_query("UPDATE `applicants` SET `count` = '1' WHERE `applicants`.`Email` = '".$_SESSION['email']."'");
	echo"<script>alert('1:-Each question is allowed to submit only once. \\n2:-The alloted time framework for each questions is attached in rules at home page.\\n3:-The codes that have been compiled and submitted will be awarded more marks.');</script>";
	
}


if(isset($_SESSION['email']))
{
  $q=mysql_query("SELECT * FROM `applicants` WHERE `email` = '".$_SESSION['email']."'");
  if($q)
  {
      $row=mysql_fetch_array($q);
  }
else
echo "Error";
  ?>

<!DOCTYPE html>
<html>
<head>
<title>Code Master|| UPES-CSI</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/maincss.css">
<link rel="shortcut icon" href="favicon.png">
 <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="analytics.js"></script>
<script src="js/includes.js"></script>
 
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a> <img src="cm1.png" style="width:80px;height:80px;"><span>Code Master</span></a>
			</div>
           <div class="header-right">
			<a class="account" href="logout.php">Logout</a>
           </div>
	  </div>
</div>
<br><br>
<h2 style=" margin-left: 50px;">Welcome <?php echo $name; ?></h2><br>
<div class="categories">
<div class="container">
  <div class="col-md-4 biseller-column">
    <a href="1.php">
      <img src="images/qn1.png" style="height:350px;width:350px;background-color:white;"/>
      <span class="price">Question 01</span>
	  
    </a>
	
    <?php if($row['q1']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success">Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


  <div class="col-md-4 biseller-column">
    <a href="2.php">
      <img src="images/qn2.jpg" style="height:350px;width:350px;"/>
      <span class="price">Question 02</span>
    </a>
    <?php if($row['q2']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


  <div class="col-md-4 biseller-column">
    <a href="3.php">
      <img src="images/qn3.jpg"style="height:350px;width:350px;"/>
      <span class="price">Question 03</span>
    </a>
    <?php if($row['q3']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


</div>
</div>

<br><br>
<div class="categories">
  <div class="container">
    
  <div class="col-md-4 biseller-column">
    <a href="4.php">
      <img src="images/qn4.jpg" style="height:350px;width:350px;"/>
      <span class="price">Question 04</span>
    </a>
    <?php if($row['q4']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
    <div class="col-md-4 biseller-column">
      <a href="5.php">
        <img src="images/qn5.png" style="height:350px;width:350px;background-color:white;"/>
        <span class="price">Question 05</span>
      </a>
      <?php if($row['q5']!=NULL) {?>
      <div class="ad-info">
        <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
      </div><?php } ?>
    </div>

  <div class="col-md-4 biseller-column">
    <a href="6.php">
      <img src="images/qn6.jpg"  style="height:350px;width:350px;"/>
      <span class="price">Question 06</span>
    </a>
    <?php if($row['q6']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


</div>

</div>
<br><br>
<div class="categories">
<div class="container">
    <div class="col-md-4 biseller-column">
    <a href="7.php">
      <img src="images/qn7.jpg" style="height:350px;width:350px;"/>
      <span class="price">Question 07</span>
    </a>
    <?php if($row['q7']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>



  <div class="col-md-4 biseller-column">
    <a href="8.php">
      <img src="images/qn8.jpg"style="height:350px;width:350px;" />
      <span class="price">Question 08</span>
    </a>
    <?php if($row['q8']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
  
  <div class="col-md-4 biseller-column">
    <a href="9.php">
      <img src="images/qn9.jpg" style="height:350px;width:350px;"/>
      <span class="price">Question 09</span>
    </a>
    <?php if($row['q9']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>

  
 
  </div>
</div>
<br><br>
<div class="categories">
<div class="container">

<div class="col-md-4 col-md-offset-4 biseller-column ">
    <a href="10.php">
      <img src="images/qn10.jpeg" style="height:350px;width:350px;"/>
      <span class="price">Question 10</span>
    </a>

    <?php if($row['q10']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
</div>
</div><br><br>
		<!--footer section start-->
         
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
        <!--footer section end-->
	</section>
</body>
</html>
<?php
}
else
{header('location:index.php');}
?>
