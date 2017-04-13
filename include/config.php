<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'p1';
   
mysql_connect($dbhost,$dbuser,$dbpass) or die('Can not connect to the server!'); 
mysql_select_db($dbname) or die('Database selection problem');
?>