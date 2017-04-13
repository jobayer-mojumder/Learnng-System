<?php

include_once '../include/config.php';

?>

<?php
 mysql_query ("set character_set_results='utf8'");
 $sql="SELECT * FROM settings WHERE id=1";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result);
 ?>

<html>
<head>
<title>404 Not Found | <?php echo $row['stitle'] ?></title>
<meta name="description" content="<?php echo $row['sdescription'] ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="wrap">
	 <div class="main">
		<h1>Oops Could not found</h1>
		<p>There's a lot of reasons why this page is<span class="error"> 404</span>.<br>
			<span>May be you input wrong address or you are not logged in</span></p>
			<br><button class="w3-btn w3-red" style="width: 100px;"><a href="../">Home</a></button>
			<br><br><br>
   </div>
  </div>
</body>
</html>

