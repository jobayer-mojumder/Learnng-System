<?php  

include_once '../../include/config.php';
include_once '../../include/auth.php';
 
 if(isset($_POST['submit']))
{ 

 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $skype = $_POST['skype'];
 
 
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

    $query_upload="INSERT into user "."(fullname, phone, password, email, skype, type, img)"." VALUES"." ('$name', '$phone','".md5($_POST['password'])."', '$email', '$skype', 'Trainer', '".$imagename."')";

    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}else{

   exit("Error While uploading image on the server");

}
}
}

 
 ?>
 <script>
 window.location.href='index.php';
 </script>
 
 
