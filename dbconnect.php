<?php
$connection = "";
$user = "";
$password = "";

if(!mysql_connect($connection,$user,$password))
{
	die('oops connection problem ! --> '.mysql_error());
}

if(!mysql_select_db("beta"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
?>