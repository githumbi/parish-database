<?php
session_start();
include '../db.php';







function change_profile_image($id, $file_temp, $file_extn){
	
    $db = mysqli_connect('localhost', 'root', '', 'parish');
	$file_path = '../images/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	move_uploaded_file($file_temp, $file_path);
	mysqli_query($db, "UPDATE congregation SET profile='".$file_path."'  WHERE id =$id");

}



//update records

if (isset($_POST['update'])) {
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$residence = $_POST['residence'];
	$interdict = $_POST['interdict'];
	$message = $_POST['message'];
	$tithe1 = $_POST['tithe1'];
	$tithe2 = $_POST['tithe2'];
	$tithe3= $_POST['tithe3'];
	$tithe4= $_POST['tithe4'];
	$tithe5= $_POST['tithe5'];
    $feb1=$_POST['feb1'];$feb2=$_POST['feb2'];$feb3=$_POST['feb3'];$feb4=$_POST['feb4'];$feb5=$_POST['feb5'];
    $march1=$_POST['march1'];$march2=$_POST['march2'];$march3=$_POST['march3'];$march4=$_POST['march4'];$march5=$_POST['march5'];
	$apr1 = $_POST['apr1'];$apr2 = $_POST['apr2'];$apr3= $_POST['apr3'];$apr4=$_POST['apr4'];$apr5= $_POST['apr5'];
	$may1 = $_POST['may1'];$may2 = $_POST['may2'];$may3= $_POST['may3'];$may4= $_POST['may4'];$may5= $_POST['may5'];
	$id= $_POST['id'];

	mysqli_query($db, "UPDATE congregation SET phone ='$phone', email='$email', residence='$residence',  interdict='$interdict', tithe1='$tithe1', tithe2='$tithe2', tithe3='$tithe3', tithe4='$tithe4',tithe5='$tithe5', feb1='$feb1', feb2='$feb2', feb3='$feb3', feb4='$feb4',feb5='$feb5', march1='$march1', march2='$march2', march3='$march3', march4='$march4',march5='$march5', apr1='$apr1', apr2='$apr2', apr3='$apr3', apr4='$apr4',apr5='$apr5',may1='$may1', may2='$may2', may3='$may3', may4='$may4',may5='$may5', message='$message' WHERE id=$id");

	$_SESSION['msg'] = "The information has been Updated";
	header('Location: ../input/input.php');
	
}






//retrieve records
$results = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', (feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3', (apr1+apr2+apr3+apr4+apr5) AS 'total4' , (may1+may2+may3+may4+may5) AS 'total5' from congregation;");


