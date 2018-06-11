<?php
include 'includes/header.php';
?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="individual.php">individual details</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="edit.php">EDIT</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="submission.php">submission List</a></li>
                </ul>
        </div>
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
    <div data-aos="fade">
        <div class="container">
            <div class="row" style="width:1347px;">
                <div class="col-md-6 col-xl-5" style="background-color:#ffffff;width:466px;height:751px;">
                    <form method="post">
                        <h2 class="text-center">Contact us</h2>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                        <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
                    </form>
                </div>
                <div class="col-md-6 col-xl-6" style="background-color:#ffffff;width:46px;height:750px;color:rgb(0,0,0);margin:0;padding:0;"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       
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
            </div>
        </div>
    </div>
   
     <?php
   include 'includes/footer.php';
   ?>
