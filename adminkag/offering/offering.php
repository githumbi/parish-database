<?php
include ('server.php');

//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT *, sum(offering_1+offering_2+offering_3+offering_4+offering_5) AS 'total' FROM offering WHERE id=$id");
  $record = mysqli_fetch_array($rec);
  $offering = $record['offering'];
  $offering_1 = $record['offering_1'];
    $offering_2 = $record['offering_2'];
    $offering_3 = $record['offering_3'];
    $offering_4 = $record['offering_4'];
  $offering_5 = $record['offering_5'];
  $total = $record['total'];

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kag Maua | Offering</title>
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
              <li><a href="../input/input.php">Individuals Offering/Tithe</a></li>
              <li class="active"><a href="offering.php">Offering s</a></li>
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
              <h2 style="color: white; text-align: center;">OFFERING (WEEKLY) </h2>
            </div>
          </div>
        </div>

<div class="col-md-8">
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
      <th>Month | Year</th>
      <th>offering (week 1) </th>
      <th>offering (week 2)</th>
      <th>offering (week 3)</th>
      <th>offering (week 4)</th>
      <th>offering (week 5)</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <tr>
          <td><?php echo $row['offering']; ?></td>
          <td><?php  echo $row['offering_1']; ?></td>
          <td><?php  echo $row['offering_2']; ?></td>
          <td><?php  echo $row['offering_3']; ?></td>
          <td><?php  echo $row['offering_4']; ?></td>
          <td><?php  echo $row['offering_5']; ?></td>
         
          <td>
            <a href="offering.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure You want to Edit?')">Edit</a>
          </td> 
         
    
    </tr>
    <?php }


    ?>
    
  </tbody>
</table>
</div>


<div class="col-md-4">
  <form style="background-color: white;" method="post" action="server.php" class="table table-bordered">
<input type="hidden" name="id" value="<?php echo $id; ?>">  
    <div class="form-group">
           <label>Month | Year e.g. January 2018 </label>
           <input type="text" name="offering" value="<?php echo $offering; ?>" class="form-control" required>
      </div>
      <div class="form-group">
           <label>offering (week 1)</label>
           <input type="text" name="offering_1" value="<?php echo $offering_1; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>offering (week 2)</label>
           <input type="text" name="offering_2" value="<?php echo $offering_2; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>offering (week 3)</label>
           <input type="text" name="offering_3" value="<?php echo $offering_3; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>offering (week 4)</label>
           <input type="text" name="offering_4" value="<?php echo $offering_4; ?>" class="form-control">
    </div>
    <div class="form-group">
           <label>offering (week 5)</label>
           <input type="text" name="offering_5" value="<?php echo $offering_5; ?>" class="form-control">
    </div>
    <div class="form-group">
           <label>TOTAL</label>
           <input type="text"  value="<?php echo $total; ?>" class="form-control" disabled>
    </div>


    <div class="input-group">
      <?php if ($edit_state == false):  ?>
    <button type="submit" name="save" class="btn">save</button>
        <?php else: ?>
    <button type="submit" name="update" class="btn">update</button>
      <?php endif ?>

      
      
    </div>

    </form>
</div>


    

</body>
</html>