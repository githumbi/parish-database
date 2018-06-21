<?php 
   
    include 'include/db.php';

//initialize variables
    $name = "";
  $email = "";
  $residence = "";
  $date = "";
  $phone = "";
  $id = 0;
  $edit_state = false;




//if save button is clicked

if (isset($_POST['save'])) {
      $name = strtoupper($_POST['name']);
      $email = $_POST['email'];
      $residence = strtoupper($_POST['residence']);
      $date = $_POST['date'];
      $phone = $_POST['phone'];
      $id=$_POST['id'];
      

      $query = "INSERT INTO congregation (usr,name,phone, email, residence,date) VALUES ('$_SESSION[name]','$name','$phone', '$email','$residence','$date')";
      mysqli_query($db, $query);
      $_SESSION['msg'] = "Information  Saved";
      header('Location: index.php');//redirect to index page
      }


include 'include/header.php';
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
                            <form method="post" action="signup.php">
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


        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>