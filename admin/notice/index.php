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

<!DOCTYPE html>
<html>
<head>
<title>View Notice | <?php echo $row['stitle'] ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../assets/img/fav.png" rel="shortcut icon">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Adamina'>
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Arbutus Slab'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="w3-light-grey"

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

	   <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-user-circle fa-fw"></i> Student <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="../student/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-plus fa-fw"></i> Add Student</a>
            <a href="../student/view_student.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Student</a>
          </div>
        </div>

        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-globe fa-fw"></i> Trainer <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="../trainer/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-user-plus fa-fw"></i> Add Trainer</a>
            <a href="../trainer/view_trainer.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Trainer</a>
          </div>
        </div>


        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-bars fa-fw"></i> Batch <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="../batch/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i> Add Batch</a>
            <a href="../batch/view_batch.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Batch</a>
          </div>
        </div>

        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-bars fa-fw"></i> Notice <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i> Add Notice</a>
            <a href="view_notice.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Notice</a>
          </div>
        </div>
	
    <a href="../profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Profile</a>
      <a href="../settings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Settings</a>
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
<!--add-->
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-plus-circle"></i> Add Notice</p></div>
<form action="add.php" class="w3-card-2 w3-light-grey w3-text-blue w3-padding" method="post" enctype="multipart/form-data">
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bell"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="title" type="text" placeholder="Title" required>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <textarea cols="130" rows="10" class="w3-input w3-border" name="notice" type="text" placeholder="Notice" required></textarea> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-check-circle"></i></div>
    <div class="w3-rest">
<select class="w3-select w3-border w3-validate" type="text" name="noticefor" required>
  <option value="" disabled selected>Notice For</option>
  <option class="w3-white" value="student">Student</option>
  <option class="w3-white" value="trainer">Trainer</option>
  <option class="w3-white" value="both">Both</option>
</select>
</div>
</div>

<button type="submit" name="submit" class="w3-btn-block w3-section w3-blue w3-ripple w3-padding">Submit</button>
</form>	
</div>
<br><br>
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
