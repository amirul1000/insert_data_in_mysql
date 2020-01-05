<?php
// //mysql datbase connection
$servername = "localhost";
$username = "root";
$password = "secret";
$db = "insert_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT into  persons (first_name,last_name,email) VALUES('".$_REQUEST['first_name']."',
'".$_REQUEST['last_name']."','".$_REQUEST['email']."')";
$result = $conn->query($sql);
if($result)
{
	$message = "Data has been saved";
}
else
{
	$message = "Error Occured";
}
echo $message;
?>	