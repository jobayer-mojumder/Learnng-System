<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('include/config.php');
	
	//Connect to mysql server
	$link = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$link) {
		die('Failed To Connect Server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db($dbname);
	if(!$db) {
		die("Unable To Select Database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$phone = clean($_POST['phone']);
	$password = clean($_POST['password']);
	
	
	//Create query
	$qry="SELECT * FROM user WHERE phone='$phone' AND password='".md5($_POST['password'])."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$id = $_SESSION['SESS_MEMBER_ID'];
			$qry1="SELECT * FROM user WHERE id='$id'";
			$result1=mysql_query($qry1);
            $row1=mysql_fetch_array($result1);
			$type = $row1['type'];
			if ($type== "Admin") {
			header("location: admin/");
			}
			elseif ($type == "Trainer")
			{
			header("location: trainer/");
			}
			elseif ($type == "Student")
			{
			header("location: student/");
			}
			session_write_close();
			exit();
		}else {
			//Login failed
			header("location: failed.php");
			exit();
		}
	}else {
		die("Query Failed");
	}
?>