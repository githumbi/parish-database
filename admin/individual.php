<?php
  include 'include/db.php';
   include 'include/header.php';


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
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul> <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);">LOGOUT</a></div>
        </div>
    </nav>
    <section class="clean-block about-us" style="height:136px;">
        <div class="container">
            <div class="block-heading">
                <h1 class="text-info" style="color:#ffffff;"><strong><span style="text-decoration: underline;">EDIT DETAILS</span></strong></h1>
            </div>
        </div>
    </section>

<div class="container" style="background-color: white">
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="background-color:#ffffff;">
                <?php
                    echo '<img class="rounded-circle" src="', $profile , '" alt="', $name ,'" width="200px" height="200px" style="margin:12px;">';
                ?>
                </div>
            </div>
        </div>
    </div>


    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin:0;background-color:#ffffff;">
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
    <tr>

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

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                      <h2 style="color: black; " for="message">COMMENTS</h2>
                      <?php echo $message; ?>
                    </div>
    
    
 
          </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>


</div>
    
    <div></div>
    <main class="page contact-us-page"></main>
    <?php
        include 'include/footer.php';
    ?>