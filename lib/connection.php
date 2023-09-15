<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   ="480project";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> connect_error) 
{
	die($conn -> error);
}
else
{
	//echo "database connected";
}

?>