<?php 

$connected = mysqli_connect('127.0.0.1', 'root', 'mysql', 'pmtscert-php');

if ( mysqli_connect_errno($connected) ) {
	echo "Failed to connect to Database: " . mysqli_connect_error();
}

?>