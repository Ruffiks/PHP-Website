<?php 

//connection
$connection = mysql_connect('localhost', 'root');


//select database
mysql_select_db($connection, "demo");

//Data
$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user', '$email','$message') ";

mysql_query($connection,$query);

echo "YOUR MESSAGE IS SENT";

?>