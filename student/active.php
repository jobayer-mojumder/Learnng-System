<?php 
if($_SESSION['user_type']!='Student'){
  header("location:../index.php");
}
error_reporting(E_ERROR | E_PARSE);
include_once '../include/config.php';
include_once '../include/auth.php';

$id = $_SESSION['SESS_MEMBER_ID'];
$sql1="SELECT * FROM user WHERE id='$id'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_array($result1);
$phone=$row1['phone'];

 if(isset($_POST['submit']))
{ 

 $earning = $_POST['earning'];

 $query_upload="INSERT into attendence "."(latest_earning, phone, earning_date)"." VALUES"." ('$earning', '$phone', '".date("Y-m-d")."')";
 mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}
?>
<script>
window.location.href='index.php';
</script>
 
 
