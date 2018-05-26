<?php
session_start();
include 'db.php';

$name = $_POST['name'];
$paswd = $_POST['paswd'];

$sql = "SELECT * FROM login WHERE name='$name' AND paswd='$paswd'";
$result = $conn->query($sql);

if (!$row = $result-> fetch_assoc()) {
	echo "You are not logged in";
}else {
	$_SESSION['id'] =$row['id'];
}

header("Location: index.php");

