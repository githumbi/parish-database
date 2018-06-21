<?php
session_start();
if (!isset($_SESSION['name'])) {
   header("Location: ../login/index.php");
}
//connect to database
$db = mysqli_connect('localhost', 'root', '', 'parish');