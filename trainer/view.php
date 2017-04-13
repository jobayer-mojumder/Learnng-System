<?php

include_once '../include/config.php';
include_once '../include/auth.php';
if($_SESSION['user_type']!='Trainer'){
  header("location:../index.php");
}
?>

<?php
 mysql_query ("set character_set_results='utf8'");
 $sql="SELECT * FROM settings WHERE id=1";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result)
?>

<?php
 $id = $_SESSION['SESS_MEMBER_ID'];
 $sql1="SELECT * FROM user WHERE id='$id'";
 $result1=mysql_query($sql1);
 $row1=mysql_fetch_array($result1);
?>

<?php
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id1 = $_GET['id'];
$result4 = mysql_query("SELECT * FROM batch WHERE primary_id1='$id1'")
or die(mysql_error());
$row4 = mysql_fetch_array($result4);
if($row4)
{
$batch_id = $row4['batch_id1'];
$subject_name = $row4['subject_name'];
$venue_name = $row4['venue_name'];
$company_name = $row4['company_name'];
$batch_status = $row4['batch_status'];
$start = $row4['start'];
$end = $row4['end'];
$batch_status = $row4['batch_status'];
$sql5="SELECT * FROM user WHERE type='Student' AND batch_id='$batch_id'";
$result5=mysql_query($sql5);
$row5=mysql_num_rows ($result5);
}
}	
?>

<!DOCTYPE html>
<html>
<title><?php echo $batch_id ?> | Batch Details</title>
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

<!-- Sidebar -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../assets/img/<?php echo $row1['img'] ?>" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Hi, <strong><?php echo $row1['fullname'] ?></strong></span><br>
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
	<a href="notice/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i> Notice</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i> Profile</a>
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
  
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-eye"></i> Batch Details</p></div>

<table class="w3-table-all w3-hoverable w3-large">
<tr>
<td class="w3-text-blue"><b>Batch ID</b></td><td><?php echo $batch_id; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Course Name</b></td><td><?php echo $subject_name; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Venue Name</b></td><td><?php echo $venue_name; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Company Name</b></td><td><?php echo $company_name; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Start Date</b></td><td><?php echo $start; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>End Date</b></td><td><?php echo $end; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Current Status</b></td><td><?php echo $batch_status; ?></td>
</tr>
<tr>
<td class="w3-text-blue"><b>Total Student</b></td><td><?php echo $row5; ?></td>
</tr>
</table>
<br>
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-superpowers"></i> Batch Students</p></div>
		<?php
        $per_page = 30;
        $result3 = mysql_query("SELECT * FROM user WHERE type='Student' AND batch_id='$batch_id' ORDER BY id ASC");
        $total_results = mysql_num_rows($result3);
        $total_pages = ceil($total_results / $per_page);


        // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page']))
        {
        $show_page = $_GET['page'];
        // make sure the $show_page value is valid
        if ($show_page > 0 && $show_page <= $total_pages)
        {
			$start = ($show_page -1) * $per_page;
            $end = $start + $per_page;
        }

        else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page;
		}
		}

        else
		{
			// if page isn't set, show first set of results
			$start = 0;
			$end = $per_page;
		}
        ?>
        <?php
        for ($i = 1; $i <= $total_pages; $i++)
        {
        echo " ";
        }
        ?>

	  
      <table class="w3-table-all w3-hoverable">
      <tr class="w3-blue-grey w3-padding"> <th>Full Name</th> <th>Email</th> <th>Phone</th> <th>Skype</th> <th>Options</th></tr>
		<?php
		// loop through results of database query, displaying them in the table
		for ($i = $start; $i < $end; $i++)
		{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; }
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . mysql_result($result3, $i, 'fullname') . '</td>';
		echo '<td>' . mysql_result($result3, $i, 'email') . '</td>';
		echo '<td>' . mysql_result($result3, $i, 'phone') . '</td>';
		echo '<td>' . mysql_result($result3, $i, 'skype') . '</td>';

		echo '<td><a style="text-decoration: none;" href="details.php?id=' . mysql_result($result3, $i, 'id') . '"><button class="w3-btn w3-blue"><i class="fa fa-info-circle"></i> Details</button></a>
        </div></td>';
		echo "</tr>";

		}
		?>
		</table>
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
