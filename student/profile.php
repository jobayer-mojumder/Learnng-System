<?php

include_once '../include/config.php';
include_once '../include/auth.php';
if($_SESSION['user_type']!='Student'){
  header("location:../index.php");
}
?>

<?php
 mysql_query ("set character_set_results='utf8'");
 $sql="SELECT * FROM settings WHERE id=1";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result)
?>

<!DOCTYPE html>
<html>
<title>My Profile | <?php echo $row['stitle'] ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/img/fav.png" rel="shortcut icon">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Adamina'>
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Arbutus Slab'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-c1 w3-xlarge" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><br></span>
</div>

<?php
 $id = $_SESSION['SESS_MEMBER_ID'];
 $sql1="SELECT * FROM user WHERE id='$id'";
 $result1=mysql_query($sql1);
 $row1=mysql_fetch_array($result1);
?>

<!-- Sidebar -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../assets/img/<?php echo $row1['img'] ?>" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Hi, <strong><?php echo $row1['fullname'] ?></strong></span><br>
	  
	  <?php
      $phone=$row1['phone'];
	  $sql2="SELECT * FROM attendence WHERE phone='$phone' ORDER BY attendence_id DESC LIMIT 1 OFFSET 0";
      $result2=mysql_query($sql2);
      $row2=mysql_fetch_array($result2);
      ?>
	  <?php
      $earning_date=$row2['earning_date'];
      $today=date('Y-m-d');
      if($earning_date=="$today")
      {
      ?>
	  <div class="w3-bar-item w3-button"><i class="fa fa-check-circle"></i></div>
	  <?php
      }
      else
      {
      ?>
	  <div class="w3-bar-item w3-button"><i class="fa fa-times-circle"></i></div>
	  <?php
	  }
	  ?>
      <a href="profile.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Overview</a>
	<a href="notice/" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i> Notice</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-user fa-fw"></i> Profile</a>
	<a href="../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
<header class="w3-container" style="padding-top:22px">
</header>
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-info-circle"></i> My Profile</p></div>
<form action="" class="w3-card-2 w3-light-grey w3-text-blue w3-padding" method="post">
<?php
$id = $_SESSION['SESS_MEMBER_ID'];
$result4 = mysql_query("SELECT * FROM user WHERE type='Student' AND id='$id'")
or die(mysql_error());
$row4 = mysql_fetch_array($result4);
$batch_id=$row4['batch_id'];
$result5 = mysql_query("SELECT * FROM batch WHERE batch_id1='$batch_id'")
or die(mysql_error());
$row5 = mysql_fetch_array($result5);
$fullname = $row4['fullname'];
$email = $row4['email'];
$phone = $row4['phone'];
$skype = $row4['skype'];
$subject = $row5['subject_name'];
$total_project = $row4['total_project'];
$nid = $row4['nid'];
$profile1_title = $row4['profile1_title'];
$profile1_link = $row4['profile1_link'];
$profile2_title = $row4['profile2_title'];
$profile2_link = $row4['profile2_link'];
$profile3_title = $row4['profile3_title'];
$profile3_link = $row4['profile3_link'];
$img = $row4['img'];
$result5 = mysql_query("SELECT * FROM attendence WHERE phone='$phone' ORDER BY attendence_id DESC LIMIT 1 OFFSET 0")
or die(mysql_error());
$row5 = mysql_fetch_array($result5);
$earning5=$row5['latest_earning'];	
?>
<div class="w3-row">
<div class="w3-col m4 l4" style="padding-top: 20px; padding-bottom: 20px;"><img class="preview" id="i1" src="../assets/img/<?php echo $img; ?>" style="width:100%;"></div>
<div class="w3-col m8 l8 w3-light-grey" style="margin-top: 8px; padding-left: 30px;">
<h5><i class="w3-large fa fa-user"></i> &nbsp; Full Name: <?php echo $fullname; ?></h5>
<h5><i class="w3-large fa fa-envelope-o"></i> &nbsp; Email Address: <?php echo $email; ?></h5>
<h5><i class="w3-large fa fa-phone"></i> &nbsp; Phone No: <?php echo $phone; ?></h5>
<h5><i class="w3-large fa fa-skype"></i> &nbsp; Skype ID: <?php echo $skype; ?></h5>
<h5><i class="w3-large fa fa-asterisk"></i> &nbsp; Taken Course: <?php echo $subject; ?></h5>
<h5><i class="w3-large fa fa-bars"></i> &nbsp; Profile1: <a href="<?php echo $profile1_link; ?>"><?php echo $profile1_title; ?></a></h5>
<h5><i class="w3-large fa fa-bars"></i> &nbsp; Profile2: <a href="<?php echo $profile2_link; ?>"><?php echo $profile2_title; ?></a></h5>
<h5><i class="w3-large fa fa-bars"></i> &nbsp; Profile3: <a href="<?php echo $profile3_link; ?>"><?php echo $profile3_title; ?></a></h5>
<h5><i class="w3-large fa fa-usd"></i> &nbsp; Latest Earning: <?php echo $earning5; ?></h5>
<h5><i class="w3-large fa fa-tags"></i> &nbsp; Project Done: <?php echo $total_project; ?></h5>
</div>
</div>
</form>	
</div>
</div>
<br><br><br><br><br>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>
