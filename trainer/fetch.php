<?php
include_once '../include/config.php';

if(isset($_POST['get_option']))
{

 $class = $_POST['get_option'];
 $find=mysql_query("select * from batch where batch_id1='$batch' order by batch_id1 asc");
 while($row=mysql_fetch_array($find))
 {
  $name=$row['name'];
  echo "<option>".$name."</option>";
 }
 exit;
}
?>