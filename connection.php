<?php
//database connection
$host_name = "localhost";
$username = "root";
$password="";
$db_name = "dharmraj_core";

$conn = new mysqli($host_name,$username,$password,$db_name);

if($conn)
{
	echo "database connected";
}
else
{
	echo "Error";
}

?>

