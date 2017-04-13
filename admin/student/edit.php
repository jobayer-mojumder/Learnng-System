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
<title>Edit Student | <?php echo $row['stitle'] ?></title>
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
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
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
	<a href="../settings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Settings</a>
	<a href="index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-user-circle fa-fw"></i> Student</a>
	<a href="../trainer/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-globe fa-fw"></i> Trainer</a>
	<a href="../batch/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i> Batch</a>
	<a href="../notice/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i> Notice</a>
    <a href="../profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Profile</a>
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
<div class="w3-container w3-blue-grey w3-padding w3-padding-left"><p style="font-size: 20px; font-family: Sanchez"><i class="w3-xlarge fa-fw fa fa-pencil"></i> Edit Student</p></div>
<div class="w3-container w3-card-2"><a class="w3-btn w3-white w3-border w3-right" style="margin-right: -17px;" href="index.php"><i class="fa fa-eye"></i> View All</a></div>
<form action="" class="w3-card-2 w3-light-grey w3-text-blue w3-padding" method="post">
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}
</script>
<?php
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
$result4 = mysql_query("SELECT * FROM user WHERE id=$id")
or die(mysql_error());
$row4 = mysql_fetch_array($result4);
}
if (isset($_POST['submit']))	
{
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $skype = $_POST['skype'];
 $project = $_POST['project'];
 $nid = $_POST['nid'];
 $batch = $_POST['batch'];
 $pat = $_POST['pat'];
 $pal = $_POST['pal'];
 $pbt = $_POST['pbt'];
 $pbl = $_POST['pbl'];
 $pct = $_POST['pct'];
 $pcl = $_POST['pcl'];
if(mysql_query("UPDATE user SET fullname='$name', phone='$phone', email='$email', skype='$skype', total_project='$project', nid='$nid', batch_id='$batch', profile1_title='$pat', profile1_link='$pal', profile2_title='$pbt', profile2_link='$pbl', profile3_title='$pct', profile3_link='$pcl' WHERE id=$id"))
{	
if(isset($_POST['submit']))
{ 
function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
if (!empty($_FILES["imag"]["name"])) {
    $file_name=$_FILES["imag"]["name"];
    $temp_name=$_FILES["imag"]["tmp_name"];
    $imgtype=$_FILES["imag"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path = "../../assets/img/".$imagename;
	
if(move_uploaded_file($temp_name, $target_path)) {

    $query_upload="UPDATE user SET img='".$imagename."' WHERE id=$id";

    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}else{

   exit("Error While uploading image on the server");

}
}
}	
?>
<script>
window.location.href='edit.php?id=<?php echo $id; ?>';
</script>
<?php
}
}
?>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" value="<?php echo $row4['fullname']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" value="<?php echo $row4['phone']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" value="<?php echo $row4['email']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-skype"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="skype" type="text" value="<?php echo $row4['skype']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nid" type="text" value="<?php echo $row4['nid']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-asterisk"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="batch" type="text" value="<?php echo $row4['batch_id']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-adjust"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="project" type="text" value="<?php echo $row4['total_project']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-flag"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pat" type="text" value="<?php echo $row4['profile1_title']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-info-circle"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pal" type="text" value="<?php echo $row4['profile1_link']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-flag"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pbt" type="text" value="<?php echo $row4['profile2_title']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-info-circle"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pbl" type="text" value="<?php echo $row4['profile2_link']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-flag"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pct" type="text" value="<?php echo $row4['profile3_title']; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-info-circle"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pcl" type="text" value="<?php echo $row4['profile3_link']; ?>">
    </div>
</div>
<button type="submit" name="submit" class="w3-btn-block w3-section w3-blue w3-ripple w3-padding">Send</button>
</form>	
</div>
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
