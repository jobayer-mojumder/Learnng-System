<?php  

include_once '../../include/config.php';
include_once '../../include/auth.php';
 
 if(isset($_POST['submit']))
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
	
	$find=mysql_query("select primary_id1 from batch where batch_id1='$batch'");
    $row6=mysql_fetch_array($find);
    $id6=$row6['primary_id1'];

    $query_upload="INSERT into user "."(fullname, phone, password, email, skype, total_project, nid, batch_id, profile1_title, profile1_link, profile2_title, profile2_link, profile3_title, profile3_link, type, img)"." VALUES"." ('$name', '$phone','".md5($_POST['password'])."', '$email', '$skype', '$project', '$nid', '$id6', '$pat', '$pal', '$pbt', '$pbl', '$pct', '$pcl', 'Student', '".$imagename."')";

    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}else{

   exit("Error While uploading image on the server");

}
}
}

 
 ?>
 <script>
 window.location.href='view_student.php';
 </script>
 
 
