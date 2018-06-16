<?php 

    include 'include/signup.db.php';
    include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">individual details</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <main class="page"></main>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-8 offset-xl-2">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">SIGNUP / EDIT / REMOVE MEMBERS</span></strong></h2>
                    <div class="row">
                        <div class="col">
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
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade"></div>
    <div></div>
    <div></div>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height:903px;">
                    <section class="clean-block clean-form dark" style="background-color:rgba(246,246,246,0.76);width:1109px;height:888px;">
                        <div class="container">
                            <div class="block-heading">
                                <h2 class="text-info">Contact Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <form method="post" action="include/signup.db.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">  
                                
                                <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" name="name" style="text-transform: uppercase" value="<?php echo $name; ?>" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                       <label>Phone Number</label>
                                       <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control">
                                </div>
                                  <div class="form-group">
                                       <label>Email</label>
                                       <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                                </div>
                                 <div class="form-group">
                                       <label>residence</label>
                                       <input type="text" name="residence" value="<?php echo $residence; ?>" class="form-control">
                                </div>
                                 <div class="form-group">
                                       <label>Baptism date</label>
                                       <input type="date" name="date" value="<?php echo $date; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <?php if ($edit_state == false):  ?>
                                  <button class="btn btn-primary btn-block" type="submit" name="save" class="btn">save</button>
                                      <?php else: ?>
                                  <button class="btn btn-primary btn-block" type="submit" name="update" class="btn">update</button>
                                    <?php endif ?>
                              </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color:#ffffff;"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
            <a href="include/signup.db.php?del=<?php echo $row[$id]; ?>" onclick="return confirm('Are you sure You want to Delete Selected Person?')">delete</a>
          </td>
    
    </tr>
    <?php }  ?>
    
  </tbody>
    </table></div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>