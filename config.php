<?php
$servername = "localhost";
$uname = "root";
$pass = "";
$dbname = "the_hobb_network";
// Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// REDIRECT
function redirect($url, $wait, $time)
{
	$string = '<script type="text/javascript">';
	$string .= 'setTimeout(function() {';
	$string .= 'window.location = "https://localhost/THN/' . $url . '"'; // EDIT LOCATION ON RELEASE
	if ($wait == "true") {
		if ($time !== "") {
			$time = $time * 1000;
			$string .= '},'.$time.');';
		} else {
			$string .= '},5000);'; // 5 seconds
		}
	} else if ($wait == "false" || $wait == "") {
		$string .= '},0);';
	}
	$string .= '</script>';

	echo $string;
}
// ALERT
function alert($msg)
{
	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>