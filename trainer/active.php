<?php 

include_once '../include/config.php';
include_once '../include/auth.php';

if(isset($_POST['submit']))
{ 

 $batch = $_POST['batch'];

 $query_upload="UPDATE batch SET batch_status='Online', reg_time=NOW() WHERE batch_id1='$batch'";
 mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}
?>
<script>
window.location.href='index.php';
</script>
 
 
