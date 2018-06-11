<<?php 
    include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" style="padding:3px;"><a class="nav-link" href="tithe.php">individual details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="edit.php">Edit</a></li>
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
                    <section class="clean-block clean-form dark">
                        <div class="container">
                            <div class="block-heading">
                                <h2 class="text-info">Contact Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <form>
                                <div class="form-group"><label>Month | Year e.g January 2018</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Offering (Week 1)</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Offering (Week 2)</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Offering (Week 3)</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Offering (Week 4)</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Offering (Week 5)</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>TOTAL</label><input class="form-control" type="text"></div>
                                <div class="form-group"><button class="btn btn-primary btn-block" type="button">SAVE</button></div>
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