<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="relaxury";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn)
{
	echo "connection Failed" .mysqli_connect_error();
}
else{
    echo "database connected sucessfuly";
}
?>