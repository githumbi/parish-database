<?php
$db = mysqli_connect('localhost', 'root', '', 'parish');
session_start();
//initialize variables
$record = "";
$id = 0;
$approved = "";
//update records

if (isset($_POST['update'])) {
  $approved = $_POST['approved'];
  $id = $_POST['id'];
  

  mysqli_query($db, "UPDATE form SET  approved = '$approved' WHERE id=$id");

  $_SESSION['msg'] = "The information has been Updated";
  header('Location: ../registration.php');
  
}




