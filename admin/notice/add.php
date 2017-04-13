<?php  
include_once '../../include/config.php';
include_once '../../include/auth.php';
 
 $id = $_SESSION['SESS_MEMBER_ID'];
 if(isset($_POST['submit']))
{ 

 $title = $_POST['title'];
 $notice = $_POST['notice'];
 $noticefor = $_POST['noticefor'];
 if($noticefor=="student")
 {
	 $query_upload="INSERT into notice "."(title, notice, notice_by, notice_date, notice_for_student, notice_for_trainer)"." VALUES"." ('$title', '$notice', '$id', '".date("Y-m-d")."', 'Yes', 'No')";
     mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());
 }
 elseif($noticefor=="trainer")
 {
	 $query_upload="INSERT into notice "."(title, notice, notice_by, notice_date, notice_for_student, notice_for_trainer)"." VALUES"." ('$title', '$notice', '$id', '".date("Y-m-d")."', 'No', 'Yes')";
     mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());
 }
 else
 {
	$query_upload="INSERT into notice "."(title, notice, notice_by, notice_date, notice_for_student, notice_for_trainer)"." VALUES"." ('$title', '$notice', '$id', '".date("Y-m-d")."', 'Yes', 'Yes')";
     mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
 }
	 
}
?>
<script>
window.location.href='view_notice.php';
</script>
 
 
