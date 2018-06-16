<?php
include 'include/offering.db.php';
include 'include/header.php';

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
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">individual details</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <main class="page login-page"></main>
    <div></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-9 offset-xl-4">
                    <h1 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">WEEKLY OFFERING</span></strong></h1>
                </div>
            </div>
        </div>
         <div class="container">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                  <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
    </div>
    <div></div>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-7 offset-xl-0" style="background-color:#f6f6f6;"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
    </table></div>
                <div class="col-md-6 col-xl-5 offset-xl-0">
                    <section class="clean-block clean-form dark" style="background-color:rgba(246,246,246,0.76);"> 
                        <div class="container">
                            <div class="block-heading">
                                <h2 class="text-info">Contact Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <form method="post" action="include/offering.db.php" >
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
                                 <div class="form-group">
                                   
                                 </div>

                              <div class="input-group">
                                <?php if ($edit_state == false):  ?>
                              <button type="submit" name="save" class="btn btn-primary btn-block"">save</button>
                                  <?php else: ?>
                              <button type="submit" name="update" class="btn btn-primary btn-block"">update</button>
                                <?php endif ?>
                                 </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>