<?php
include ('server.php');

//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', (feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3', (apr1+apr2+apr3+apr4+apr5) AS 'total4', (may1+may2+may3+may4+may5) AS 'total5' from congregation WHERE id=$id;");
  $record = mysqli_fetch_array($rec);
  $name = $record['name'];
  $phone= $record['phone'];
  $email = $record['email'];
  $residence = $record['residence'];
  $interdict = $record['interdict'];
  $message = $record['message'];

  //the tithe variables represent january!! Don't confuse
  $tithe1 = $record['tithe1'];$tithe2 = $record['tithe2'];$tithe3 = $record['tithe3'];$tithe4 = $record['tithe4'];$tithe5 = $record['tithe5'];$total = $record['total'];
  $feb1 = $record['feb1'];$feb2 = $record['feb2'];$feb3 = $record['feb3'];$feb4 = $record['feb4'];$feb5 = $record['feb5'];$total2 = $record['total2'];
  $march1 = $record['march1'];$march2 = $record['march2'];$march3 = $record['march3'];$march4 = $record['march4'];$march5 = $record['march5'];$total3 = $record['total3'];
  $apr1 = $record['apr1'];$apr2 = $record['apr2'];$apr3 = $record['apr3'];$apr4 = $record['apr4'];$apr5 = $record['apr5'];$total4 = $record['total4'];
  $may1 = $record['may1'];$may2 = $record['may2'];$may3 = $record['may3'];$may4 = $record['may4'];$may5 = $record['may5'];$total5 = $record['total5'];
  $profile = $record['profile'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>indivual Details</title>
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
              <li  class="active"><a href="../input/input.php">Individuals Offering/Tithe</a></li>
              <li><a href="../offering/offering.php">Offering s</a></li>
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
              <h2></h2>
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


<?php if($row = mysqli_fetch_array($results)) { ?>
<div style="background-color: white;" class="container">

  <form style="background-color: white;" method="post" action="server.php" class="table table-bordered">
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
  <table style="background-color: white;" class="table table-hover">
  <thead>
    <tr>
      <?php echo '<img  style="height: 220px; length:220px;"  src="', $profile , '" alt="', $name ,'"  >'; ?>
      <th colspan="4"><h3><?php echo $name; ?></h3></th>
    </tr>
    <tr>
      <th scope="col">Phone number</th>
      <th scope="col">Email</th>
      <th scope="col">Residence</th>
      <th scope="col">Interdict</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $phone; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $residence; ?></td>
      <td><?php echo $interdict; ?></td>
    </tr>
  </tbody>
</table>



  
<table style="background-color: white;" class="table table-bordered">
  
  <thead>
    
    <tr>
      <th>Month</th>
      <th>WEEK 1</th>
      <th>WEEK 2</th>
      <th>WEEK 3</th>
      <th>WEEK 4</th>
      <th>WEEK 5</th>
      <th>Total</th>
     
    </tr>
  </thead>

  <tbody>

    
      

      <tr> 
          <td>January 2018</td> 
          <td><?php echo $tithe1; ?></td>
          <td><?php echo $tithe2; ?></td>
          <td><?php echo $tithe3; ?></td>
          <td><?php echo $tithe4; ?></td>
          <td><?php echo $tithe5; ?></td>
          <td><?php echo $total; ?></td>
      </tr>

       <tr> 
          <td>February 2018</td> 
          <td><?php echo $feb1; ?></td>
          <td><?php echo $feb2; ?></td>
          <td><?php echo $feb3; ?></td>
          <td><?php echo $feb4; ?></td>
          <td><?php echo $feb5; ?></td>
          <td><?php echo $total2; ?></td>
      </tr>

      <tr> 
          <td>March 2018</td> 
          <td><?php echo $march1; ?></td>
          <td><?php echo $march2; ?></td>
          <td><?php echo $march3; ?></td>
          <td><?php echo $march4; ?></td>
          <td><?php echo $march5; ?></td>
          <td><?php echo $total3; ?></td>
      </tr>

      <tr> 
          <td>April 2018</td> 
          <td><?php echo $apr1; ?></td>
          <td><?php echo $apr2; ?></td>
          <td><?php echo $apr3; ?></td>
          <td><?php echo $apr4; ?></td>
          <td><?php echo $apr5; ?></td>
          <td><?php echo $total4; ?></td>
      </tr>

      <tr> 
          <td>May 2018</td> 
          <td><?php echo $may1; ?></td>
          <td><?php echo $may2; ?></td>
          <td><?php echo $may3; ?></td>
          <td><?php echo $may4; ?></td>
          <td><?php echo $may5; ?></td>
          <td><?php echo $total5; ?></td>
      </tr>

</tbody>
</table>



      <div class="form-group">
                      <h4 style="color: black; " for="message">COMMENTS</h4>
                      <p><?php echo $message; ?></p>
                    </div>
    <?php }


    ?>
    
 
         
</div>

</form>










  

</body>
</html>