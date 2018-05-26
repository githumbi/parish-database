<?php

$db = mysqli_connect('localhost', 'root', '', 'parish');

$sql = "SELECT * FROM form";

$result1 = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kag Maua |Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/icomoon.css">
</head>

<body>
  <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="signup/signup.php">Signup Members</a></li>
              <li><a href="input/input.php">Add Congregation Info</a></li>
              <li><a href="offering/offering.php">Offerings</a></li>
              <li class="active"><a href="view.php">Submission List</a></li>

              <li>
                                    </div>

                                  </div>
                               
      </nav>
      <div class="ex1">

       <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2> Submitted list</h2>
            </div>
          </div>
        </div>





<table class="table table-bordered">
    <thead>
     
      <th>No.</th>
      <th>date submitted</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>plot</th>
      <th>House Number</th>
      <th>Date saved</th>
      <th>Baptized by water</th>
      <th>Date baptized</th>
      <th>baptized by Holyspirit</th>
      <th>Date Baptized</th>
      <th>Pay Tithe</th>
      <th>Agree with Teachings</th>
      <th>Attend church</th>
      <th>Participate in weekly Meetings</th>
      <th>Member of home Cell</th>
      <th>Support Leadership of church</th>
      <th>Support church mission financially</th>
      <th>Mobilize the community</th>
    </thead>


<tbody>
  <?php while($mbers = mysqli_fetch_assoc($result1)) : ?>

          <tr>
            
             <td><?=$mbers['id']; ?></td>
             <td><?=$mbers['datesubmit']; ?></td>
             <td><?=$mbers['username']; ?></td>
            <td><?=$mbers['phone']; ?></td>
             <td><?=$mbers['address']; ?></td>
              <td><?=$mbers['plot']; ?></td>
              <td><?=$mbers['housenumber']; ?></td>
              <td><?=$mbers['datesaved']; ?></td>
              <td><?=$mbers['water']; ?></td>
              <td><?=$mbers['datewater']; ?></td>
              <td><?=$mbers['holyspirit']; ?></td>
              <td><?=$mbers['baptized']; ?></td>
              <td><?=$mbers['tithe']; ?></td>
              <td><?=$mbers['teachings']; ?></td>
              <td><?=$mbers['attend']; ?></td>
              <td><?=$mbers['participate']; ?></td>
              <td><?=$mbers['cell']; ?></td>
              <td><?=$mbers['support']; ?></td>
              <td><?=$mbers['mission']; ?></td>
              <td><?=$mbers['mobilize']; ?></td>
          </tr>

  <?php endwhile; ?>
</tbody>

 </table>
</div>
