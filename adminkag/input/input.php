<?php
include ('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kag Maua| Add Congregation Info</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/icomoon.css">
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
            <img src="../img.png" alt="KAG church">
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php">Home</a></li>
              <li><a href="../signup/signup.php">Signup Members</a></li>
              <li  class="active"><a href="input.php">Individuals Offering/Tithe</a></li>
              <li><a href="../offering/offering.php">Weekly Offerings</a></li>
              <li><a href="../view.php">Submission List</a></li>
              <li>
              </div>

                                  </div>
                                </div>
                              </div>
                   </li>
            </ul>

          </div>
        </div>
      </nav>


      <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2 style="text-align: center; color: white;">TOTAL TITHE PER MONTH</h2>
            </div>
          </div>
        </div>

<div class="container">
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
    <tr>
      <th colspan="3"></th>
    </tr>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Interdict</th>
      <th colspan="1">January </th>
       <th colspan="1">February </th>
        <th colspan="1">March </th>
         <th colspan="1">April </th>
         <th colspan="1">May </th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $i=1;
     while ($row = mysqli_fetch_array($results)){ ?>
      <tr>
         <td> <?php
                echo $i;
                $i++;
            ?>
          </td>
          <td><?php echo $row['name']; ?></td>
          <td><?php  echo $row['interdict']; ?></td>
          <td><?php  echo $row['total']; ?></td>
          <td><?php  echo $row['total2']; ?></td>
          <td><?php  echo $row['total3']; ?></td>
          <td><?php  echo $row['total4']; ?></td>
          <td><?php  echo $row['total5']; ?></td>
          <td>
            <a href="../individual/edit.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Edit Details of selected Member?')">Edit</a>
          </td>
          <td>
            <a href="../individual/individual.php?edit=<?php echo $row['id']; ?>">Details</a>
          </td> 
         
    
    </tr>
    <?php }    ?>
     <tr>
      <td></td>
      <td></td>
      <td>TOTAL</td>
       <?php
      if ($row2 = mysqli_fetch_array($results2)){  ?>
      
         <td><?php  echo $row2['jan']; ?></td>
          <td><?php  echo $row2['feb']; ?></td>
         <td><?php  echo $row2['march']; ?></td>
          <td><?php  echo $row2['apr']; ?></td>
          <td><?php  echo $row2['may']; ?></td>
       <?php } ?>          
    </tr>
  </tbody>
</table>
</div>




		

</body>
</html>