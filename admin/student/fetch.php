<?php

include_once '../../include/config.php';
include_once '../../include/auth.php';

if(isset($_POST['get_option']))
{

 $batch = $_POST['get_option'];
 $find=mysql_query("select batch_id1 from batch where batch_id1='$batch' order by batch_id1 asc");
 while($row=mysql_fetch_array($find))
 {
  $batch1=$row['batch_id1'];
  echo "<option>".$batch1."</option>";
 }
 exit;
}
?>