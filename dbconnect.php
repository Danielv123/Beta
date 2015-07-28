<?php
if(!mysql_connect("localhost","root","Aq12wsxz"))
{
     die('oops connection problem ! --> '.mysql_error());
}

if(!mysql_select_db("beta"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>