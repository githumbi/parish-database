<?php
include 'includes/signup.db.php';
include 'includes/header.php';
?>

                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="individual.php">individual details</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="edit.php">EDIT</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="submission.php">submission List</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page"></main>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-8 offset-xl-2">
                    <h2 style="color:rgb(255,255,255);"><strong>SIGNUP / EDIT / REMOVE MEMBERS</strong></h2>


           


                    <?php if (isset($_SESSION['msg'])):  ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success" role="alert"><span><strong>
                                <?php
                                  echo $_SESSION['msg'];
                                  unset($_SESSION['msg']);
                                ?>
                            </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                        </div>
                    </div>
                      <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class=" col-md-3 col-xl-5" style="height:854px;background-color:rgba(255,255,255,0);">
                    <section class="clean-block clean-form dark">
                        <div class="container flex-grow-1" style="height:695px;">
                            <div class="block-heading">
                                <h2 class="text-info">Registration</h2>
                                <p>Enter details of a member and press Submit.</p>
                            </div>
                            <form style="height:546px;" method="post" action="signup.php">
                                <div class="form-group">
                                  <label >Name</label>
                                  <input class="form-control item" type="text" id="name" name="name" style="text-transform: uppercase" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Phone No</label>
                                  <input class="form-control item" type="text" id="name" name="phone" style="text-transform: uppercase" value="<?php echo $phone; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control item" type="text" id="name" name="email" style="text-transform: uppercase" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Residence</label>
                                  <input class="form-control item" type="text" id="name" name="residence" style="text-transform: uppercase" value="<?php echo $residence; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Baptism date</label>
                                  <input class="form-control item" type="date" id="name" name="date" style="text-transform: uppercase" value="<?php echo $date; ?>">
                                </div>


                                  <?php if ($edit_state == false):  ?>
                      <button type="submit" name="save" class="btn btn-primary btn-block" style="height:41px;margin:0;padding:6px;">save</button>
                          <?php else: ?>
                      <button type="submit" name="update" class="btn btn-primary btn-block" style="height:41px;margin:0;padding:6px;">update</button>
                        <?php endif ?>
                              </form>
                        </div>
                    </section>
                </div>
                <div class=" col-md-9 col-xl-7" style="background-color:#f7f6f4;">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%"  style="background-color:#f7f6f4;">
       <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Residence</th>
      <th>Baptism</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
          
              <?php 
              $i=1;
               while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td> <?php
                          echo $i;
                          $i++;
                          ?>
                      </td>


          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php  echo $row['email']; ?></td>
          <td><?php  echo $row['residence']; ?></td>
          <td><?php  echo $row['date']; ?></td>
          <td>
            <a href="signup.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure You want to Edit details of Selected Person?')">Edit</a>
          </td> 
          <td>
            <a href="signup.php?del=<?php echo $row[$id]; ?>" onclick="return confirm('Are you sure You want to Delete Selected Person?')">delete</a>
          </td>
    
    </tr>
    <?php }  ?>

  </tbody>
    </table></div>
            </div>
        </div>
    </div>
    
     <?php
   include 'includes/footer.php';
   ?>
