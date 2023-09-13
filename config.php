<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","","quiz");
	if(!$conn) {
		exit();
	}
?>