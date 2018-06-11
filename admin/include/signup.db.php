<?php
session_start();
include 'db.php';

//initialize variables
    $name = "";
	$email = "";
	$residence = "";
	$date = "";
	$phone = "";
	$id = 0;
	$edit_state = false;



//fetch the record to be updated
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM congregation WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$residence = $record['residence'];
  $date = $record['date'];
  $email = $record['email'];
  $phone = $record['phone'];
	$id = $record['id'];
}

//if save button is clicked

if (isset($_POST['save'])) {
			$name = strtoupper($_POST['name']);
			$email = $_POST['email'];
			$residence = strtoupper($_POST['residence']);
			$date = $_POST['date'];
			$phone = $_POST['phone'];
			$id=$_POST['id'];
			

			$query = "INSERT INTO congregation (name,phone, email, residence,date) VALUES ('$name','$phone', '$email','$residence','$date')";
			mysqli_query($db, $query);
			$_SESSION['msg'] = "Information  Saved";
			header('Location: ../signup.php');//redirect to index page
			}

//update records

if (isset($_POST['update'])) {
	$name = strtoupper($_POST['name']);
	$email = $_POST['email'];
	$residence = strtoupper($_POST['residence']);
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$id= $_POST['id'];

	mysqli_query($db, "UPDATE congregation SET name='$name',phone='$phone', email='$email', residence='$residence', date='$date' WHERE id=$id ");
	$_SESSION['msg'] = "The information has been Updated";
	header('Location: ../signup.php');
	
}



//delete records
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM congregation WHERE id=$id");
	$_SESSION['msg'] = "The selected person has been Removed";
	header('Location: ../signup.php');
}



//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation order by name");


