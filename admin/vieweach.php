<?php
include 'include/db.php';
include 'include/header.php';


$sql = "SELECT * FROM form";

$result1 = $db->query($sql);

//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT * from form WHERE id=$id;");
  $record = mysqli_fetch_array($rec);
  
}


?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="height:92px;background-color:rgba(255,255,255,0);">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="height:40px;padding:-23px;margin:-49px;color:rgb(255,255,255);font-size:39px;"><strong><span style="text-decoration: underline;">SUBMISSION LIST</span></strong></h2>
                </div>
            </div>
        </section>
    </main>
    <div data-aos="fade">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col-md-12">
                   <?php if ($mbers= $record) { ?>
            <form method="post" action="include/registration.db.php" class="table table-bordered">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <h1 style="text-transform: uppercase;">Submission form for <?php echo $mbers['username']; ?></h1>
  <thead>
    
    <tr>
      <th>No.</th>
      <th>QUESTIONS</th>
      <th>RESPONSES</th>
      
     
    </tr>
  </thead>

  <tbody>

    
      

      <tr> 
          <td>1</td>
          <td>Date</td> 
          <td><?php echo $mbers['datesubmit']; ?></td>
      </tr>
      <tr> 
          <td>2</td>
          <td>Telephone No</td> 
          <td><?php echo $mbers['phone']; ?></td>
      </tr>
      <tr> 
          <td>3</td>
          <td>Pysical Address(sehemu ya mji)</td> 
          <td><?php echo $mbers['address']; ?></td>
      </tr>
      <tr> 
          <td>4</td>
          <td>Plot</td> 
          <td><?php echo $mbers['plot']; ?></td>
      </tr>
      <tr> 
          <td>5</td>
          <td>Housenumber</td> 
          <td><?php echo $mbers['housenumber']; ?></td>
      </tr>
      <tr> 
          <td>6</td>
          <td>Date Saved</td> 
          <td><?php echo $mbers['datesaved']; ?></td>
      </tr>
       <tr> 
          <td>7</td>
          <td>Have you been baptized by water?</td> 
          <td><?php echo $mbers['water']; ?> on <?php echo $mbers['datewater']; ?> </td>
      </tr>
      <tr> 
          <td>8</td>
          <td>Have you been baptized by Holy Spirit?</td> 
          <td><?php echo $mbers['holyspirit']; ?></td>
      </tr>
      <tr> 
          <td>9</td>
          <td>if not, do you seek to be baptized?</td> 
          <td><?php echo $mbers['baptized']; ?></td>
      </tr>
      <tr> 
          <td>10</td>
          <td>Are you Faithfull in paying your Tithe?</td> 
          <td><?php echo $mbers['tithe']; ?></td>
      </tr>
      <tr> 
          <td>11</td>
          <td>Do you agree with our Teachings</td> 
          <td><?php echo $mbers['teachings']; ?></td>
      </tr>
      <tr> 
          <td>12</td>
          <td> Attending church reguraly</td> 
          <td><?php echo $mbers['attend']; ?></td>          
      </tr>
      <tr> 
          <td>13</td>
          <td> Belong and actively participate in the weekly meeting</td> 
          <td><?php echo $mbers['participate']; ?></td>          
      </tr>
      <tr> 
          <td>14</td>
          <td> Being a member of a Home Cell</td> 
          <td><?php echo $mbers['cell']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Pray, support and submit to the leadership of our church to enable us to serve you Better</td> 
          <td><?php echo $mbers['support']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Support church mission Financially</td> 
          <td><?php echo $mbers['mission']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Actively mobilize the community through witnessing and invitations</td> 
          <td><?php echo $mbers['mobilize']; ?></td>          
      </tr>
      <tr> 
          <td></td>
          <td> APPROVED</td> 
          <td><input type="checkbox" name="approved" value="Yes">Yes
            <input type="checkbox" name="approved" value="No">No</td>          
      </tr>


      
</tbody>

<div class="container">
              <button type="submit" name="update" class="btn">update</button>
          </div>
</table>
<?php  } ?>
</form>
</div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>