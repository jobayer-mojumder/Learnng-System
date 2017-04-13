<?php  
include_once '../../include/config.php';
include_once '../../include/auth.php';
 
 $id = $_SESSION['SESS_MEMBER_ID'];
 
 if(isset($_POST['submit']))
{ 

 $title = $_POST['title'];
 $notice = $_POST['notice'];

 $query_upload="INSERT into notice "."(title, notice, notice_by, notice_date)"." VALUES"." ('$title', '$notice', '$id', '".date("Y-m-d")."')";
 mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}
?>
<script>
window.location.href='index.php';
</script>
 
 
