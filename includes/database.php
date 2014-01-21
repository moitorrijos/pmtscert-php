<?php 

$connected = mysqli_connect('127.0.0.1', 'root', 'mysql', 'pmtscert-php');

if ( mysqli_connect_errno($connected) ) {
	echo "Failed to connect to Database: " . mysqli_connect_error();
}

function courses() {
	global $connected;
	mysqli_select_db($connected, 'pmtscert-php');
	$query = mysqli_query($connected, "SELECT * FROM courses") or die('Error getting database.');
	$rows = mysqli_fetch_array($query) or die('Error fetching database');

	while($rows) {
		$course_name = $rows['course_name'];
		$course_id = $rows['course_id'];

		return "<option>$course_name | $course_id</option>";
	};

};

?>