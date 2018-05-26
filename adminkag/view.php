<?php
include 'viewserver.php';

$db = mysqli_connect('localhost', 'root', '', 'parish');

$sql = "SELECT * FROM form order by username";

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
            <img src="img.png" alt="KAG church">
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
      <div class="container">

       <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2 style="color: white; text-align: center; ">SUBMITTED LIST</h2>
            </div>
          </div>
        </div>


 <?php if (isset($_SESSION['msg'])):  ?>
      <div class="msg">
        <?php
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        ?>
      </div>
<?php endif ?>


<table style="background-color: white;" class="table table-bordered">
    <thead>
     
      <th>No.</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Approved To be Member</th>
      <th>Action</th>
      
    </thead>


<tbody>
  <?php
  $i=1;
   while($mbers = mysqli_fetch_assoc($result1)) : ?>

          <tr>
            
             <td> <?php
                echo $i;
                $i++;
                   ?>
             </td>
             <td><?php echo $mbers['username']; ?></td>
            <td><?php echo $mbers['phone']; ?></td>
            <td><?php echo $mbers['approved']; ?></td>
            <td>
            <a href="vieweach.php?edit=<?php echo $mbers['id']; ?>" onclick="return confirm('Edit Details of selected Member?')">Edit</a>
          </td>
             
          </tr>

  <?php endwhile; ?>
</tbody>

 </table>
</div>
</body>
</html>



