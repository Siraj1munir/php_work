<?php 
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'rate';
$units=5;
function connect(){
	$host="localhost";
 $uname="root";
 $pass="";
 $rating_dbname        = 'rate';

error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysql_connect($host,$uname,$pass);
error_reporting(E_ALL ^ E_DEPRECATED);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


