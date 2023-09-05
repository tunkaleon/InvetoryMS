<?php
	$conn = new mysqli("localhost","root","","huyeshop");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>