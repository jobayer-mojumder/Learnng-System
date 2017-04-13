<?php
include_once '../include/config.php';
include_once '../include/auth.php';
?>
<?php
mysql_query ("set character_set_results='utf8'");
$sql="SELECT * FROM settings WHERE id=1";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
  <title>Admin Dashboard | <?php echo $row['stitle'] ?></title>
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
        <a href="index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Overview</a>

        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-user-circle fa-fw"></i> Student <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="student/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-plus fa-fw"></i> Add Student</a>
            <a href="student/view_student.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Student</a>
          </div>
        </div>

        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-globe fa-fw"></i> Trainer <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="trainer/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-user-plus fa-fw"></i> Add Trainer</a>
            <a href="trainer/view_trainer.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Trainer</a>
          </div>
        </div>


        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-bars fa-fw"></i> Batch <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="batch/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i> Add Batch</a>
            <a href="batch/view_batch.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Batch</a>
          </div>
        </div>

        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-bars fa-fw"></i> Notice <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block" style="padding-left: 15px;">
            <a href="notice/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i> Add Notice</a>
            <a href="notice/view_notice.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa fa-eye fa-fw"></i> View Notice</a>
          </div>
        </div>

        <a href="profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i> Profile</a>
        <a href="settings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Settings</a>
        <a href="../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i> Logout</a><br><br>


      </div>
    </nav>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <header class="w3-container" style="padding-top:22px">
      </header>
      <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
          <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-globe w3-xxxlarge"></i></div>
            <div class="w3-right">
              <!--active batch-->
              <?php
              $sql6="SELECT * FROM batch WHERE batch_status='Online' ORDER BY district ASC";
              $result6=mysql_query($sql6);
              $rows6 = mysql_num_rows($result6);
              ?>
              <?php
              $sql7="SELECT * FROM batch WHERE batch_status='Offline' ORDER BY district ASC";
              $result7=mysql_query($sql7);
              $rows7 = mysql_num_rows($result7);
              ?>
              <h3><?php echo $rows6 + $rows7; ?></h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Batch</h4>
          </div>
          <div class="w3-accordion w3-half w3-red w3-border">
            
            <p onclick="myFunction('Demo1')" class="w3-red w3-left-align w3-margin-left" style="font-family: Adamina;">Active: <?php echo $rows6 ?></p>
            <div id="Demo1" class="w3-accordion-content w3-light-grey">
              <?php
              $sql6="SELECT DISTINCT district, batch_id1 FROM batch WHERE batch_status='Online' ORDER BY district ASC";
              $result6=mysql_query($sql6);
              $rows6 = mysql_num_rows($result6);
              while ($rows6 = mysql_fetch_array($result6)) { ?>
              <div class='w3-dropdown-hover' style='width: 100%;'><button class='w3-btn-block w3-light-grey w3-left-align' style='font-size: 12px;'><i class='fa fa-circle w3-text-green'></i><?php echo $rows6['district'] ?></button><div class='w3-dropdown-content w3-border' style='margin-left: 120px; margin-top: -30px;'>
                <div class='w3-dropdown-hover' style='width: 100%;'><button class='w3-btn-block w3-light-grey' style='font-size: 12px;'><i class='fa fa-circle w3-text-green'></i> <?php echo $rows6['batch_id1'] ?></button><div class='w3-dropdown-content w3-border' >
                  
                </div>
              </div>
            </div>
          </div> <?php }
          ?>
          
        </div>
      </div>
      
      
      <script>
      function myFunction(id) {
      document.getElementById(id).classList.toggle("w3-show");
      document.getElementById(id).previousElementSibling.classList.toggle("w3-red");}
      </script>
      
      
      <div class="w3-container w3-half w3-red w3-border"><p style="font-family: Adamina">Inactive: <?php echo $rows7 ?></p></div>
    </div>
    <a href="trainer/view_trainer.php">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-superpowers w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
          $sql2="SELECT type FROM user WHERE type='Trainer'";
          $result2=mysql_query($sql2);
          $rows2 = mysql_num_rows($result2);
          ?>
          <h3><?php echo $rows2 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Trainers</h4>
      </div>
      <div class="w3-container w3-half w3-blue"><p style="font-family: Adamina; height: 20px;"></p></div><div class="w3-container w3-half w3-blue"><p style="font-family: Adamina; height: 20px;"></p></div>
    </div>
    </a>
    <a href="student/view_student.php">
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
          $sql5="SELECT type FROM user WHERE type='Student'";
          $result5=mysql_query($sql5);
          $rows5 = mysql_num_rows($result5);
          ?>
          <h3><?php echo $rows5 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Students</h4>
      </div>
      <div class="w3-container w3-half w3-teal"><p style="font-family: Adamina; height: 20px;"></p></div><div class="w3-container w3-half w3-teal"><p style="font-family: Adamina; height: 20px;"></p></div>
    </div>
    </a>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-lock w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
          $sql4="SELECT type FROM user WHERE type='Admin'";
          $result4=mysql_query($sql4);
          $rows4 = mysql_num_rows($result4);
          ?>
          <h3><?php echo $rows4 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Admin</h4>
      </div>
      <div class="w3-container w3-half w3-orange"><p style="font-family: Adamina; height: 20px;"></p></div><div class="w3-container w3-half w3-orange"><p style="font-family: Adamina; height: 20px;"></p></div>
    </div>
  </div>
  <!--view-->
  <div class="w3-container w3-blue-grey w3-padding-left w3-margin-left"><p style="font-size: 20px; font-family: Adamina"><i class="w3-xlarge fa-fw fa fa-eye"></i> View Notice</p><a class="w3-btn w3-medium w3-right w3-white w3-round" style="margin-top: -50px; font-family: Arbutus Slab" href="notice/index.php"><i class="w3-large fa-fw fa fa-plus-circle"></i> Add Notice</a></div>
  <?php
  $per_page = 10;
  $result3 = mysql_query("SELECT * FROM notice Order By notice_id Desc");
  $row3=mysql_fetch_array($result3);
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
  <table class="w3-table-all w3-hoverable w3-margin-left w3-card-4">
    <?php
    // display data in table
    ?>
    <tr class="w3-blue w3-padding"> <th>Title</th>  <th>Date</th> <th>For Student</th> <th>For Trainer</th> <th>Notice By</th> <th>Details</th> </tr>
    <?php
    // loop through results of database query, displaying them in the table
    for ($i = $start; $i < $end; $i++)
    {
    // make sure that PHP doesn't try to show results that don't exist
    if ($i == $total_results) { break; }
    // echo out the contents of each row into a table
    echo "<tr>";
      echo '<td>' . mysql_result($result3, $i, 'title') . '</td>';
      echo '<td>' . mysql_result($result3, $i, 'notice_date') . '</td>';
      echo '<td>' . mysql_result($result3, $i, 'notice_for_student') . '</td>';
      echo '<td>' . mysql_result($result3, $i, 'notice_for_trainer') . '</td>';
      $person=mysql_result($result3, $i, 'notice_by');
      $result4 = mysql_query("SELECT * FROM user WHERE id='$person'");
      $row4=mysql_fetch_array($result4);
      echo '<td>' . $row4['fullname'] . '</td>';
      echo '<td><div class="w3-dropdown-hover">
        <button class="w3-btn w3-blue">Action <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-border" style="right:0">
            <a href="notice/view.php?id=' . mysql_result($result3, $i, 'notice_id') . '"><i class="fa fa-eye"></i> View</a>
          <a href="notice/edit.php?id=' . mysql_result($result3, $i, 'notice_id') . '"><i class="fa fa-pencil"></i> Edit</a>
          <a href="notice/delete.php?id=' . mysql_result($result3, $i, 'notice_id') . '"><i class="fa fa-trash-o"></i> Delete</a>
        </div>
      </div></td>';
    echo "</tr>";
    }
    // close table>
    // pagination
    ?>
  </table>
  <hr>
  <!-- End page content -->
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