<?php
include 'include/db.php';
include 'include/header.php';


$sql = "SELECT * FROM form order by username";

$result1 = $db->query($sql);
?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                     <li class="nav-item" role="presentation" ><a class="nav-link" href="report.php">Monthly Report </a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="registration.php">Register</a></li>
                </ul>

            
           <!--  <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);" >LOGOUT</a> -->
          
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
              LOGOUT<br>  <?php echo strtoupper($_SESSION['name']); ?> BRANCH
            </button>
  

                </div>
        </div>
    </nav>

    <main class="page landing-page">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                 <!--  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div> -->
                  <div class="modal-body">
                    Are you sure You want to logout from <?php echo $_SESSION['name']; ?> Branch?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="include/logout.php" type="submit" class="btn btn-danger">Logout</a>
                  </div>
                </div>
              </div>
            </div>
    </main>      
  
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
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
     
      <th>No.</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Approved To be Member</th>
      <th>Action</th>
      
    </thead>


<tbody>
  <?php
  $i=1;
   while($mbers = mysqli_fetch_assoc($result1)) : ?>

          <tr>
            
             <td> <?php
                echo $i;
                $i++;
                   ?>
             </td>
             <td><?php echo $mbers['username']; ?></td>
            <td><?php echo $mbers['phone']; ?></td>
            <td><?php echo $mbers['approved']; ?></td>
            <td>
            <a href="vieweach.php?edit=<?php echo $mbers['id']; ?>" onclick="return confirm('Edit Details of selected Member?')">Edit</a>
          </td>
             
          </tr>

  <?php endwhile; ?>
</tbody>
</table>
</div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>