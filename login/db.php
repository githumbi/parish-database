<?php
session_start();
//connect to database
$conn = mysqli_connect('localhost','root','','parish');

if (!$conn) {
	die("No connection".mysqli_connect_error());
}

