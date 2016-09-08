<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "image_upload";
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>