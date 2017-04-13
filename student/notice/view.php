<?php

include_once '../../include/config.php';
include_once '../../include/auth.php';

?>

<?php
 mysql_query ("set character_set_results='utf8'");
 $sql="SELECT * FROM settings WHERE id=1";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result)
?>

<?php
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
$result4 = mysql_query("SELECT * FROM notice WHERE notice_id=$id")
or die(mysql_error());
$row4 = mysql_fetch_array($result4);
if($row4)
{
$title4 = $row4['title'];
$notice4 = $row4['notice'];
$noticedate4 = $row4['notice_date'];
}
}	
?>

<!DOCTYPE html>
<html>
<title><?php echo $title4 ?> | View Notice</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../assets/img/fav.png" rel="shortcut icon">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../../assets/css/style.css">
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
      <img src="../../assets/img/<?php echo $row1['img'] ?>" class="w3-circle w3-margin-right" style="width:46px">
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
      <a href="../profile.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="../../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Overview</a>
	<a href="index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bell fa-fw"></i> Notice</a>
    <a href="../profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i> Profile</a>
	<a href="../../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
<header class="w3-container" style="padding-top:22px">
</header>
  
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-eye"></i> View Notice</p></div>
<div class="w3-container w3-card-2"><a class="w3-btn w3-white w3-border w3-right" style="margin-right: -17px;" href="index.php"><i class="fa fa-eye"></i> View All</a></div>
<form action="" class="w3-card-2 w3-light-grey w3-text-blue w3-padding" method="post">

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bell"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="title" type="text" value="<?php echo $title4 ?>" disabled>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <textarea cols="130" rows="10" class="w3-input w3-border" name="notice" type="text" disabled><?php echo $notice4 ?></textarea> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="date" type="text" value="<?php echo $noticedate4 ?>" disabled>
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
