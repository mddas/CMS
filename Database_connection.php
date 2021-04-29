<?php
$connect=mysqli_connect('localhost','root','','CMS');
if(!$connect)
{
	die("connection failed".mysqli_connect_error());
}
?>