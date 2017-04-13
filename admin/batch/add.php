<?php  

include_once '../../include/config.php';
include_once '../../include/auth.php';
 
 if(isset($_POST['submit']))
{ 

 $batchid = $_POST['batchid'];
 $subject = $_POST['subject'];
 $venue = $_POST['venue'];
 $district = $_POST['district'];
 $company = $_POST['company'];
 $start = $_POST['start'];
 $end = $_POST['end'];
 $trainer = $_POST['trainer'];
 $find=mysql_query("select * from user where type='trainer' AND fullname='$trainer' order by fullname asc");
 $row6=mysql_fetch_array($find);
 $id6=$row6['id'];
 

 $query_upload="INSERT into batch "."(batch_id1, subject_name, venue_name, district, company_name, start, end, user_id)"." VALUES"." ('$batchid', '$subject', '$venue', '$district', '$company', '$start', '$end', '$id6')";

 mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 

}
 ?>
 <script>
 window.location.href='index.php';
 </script>
 
 
