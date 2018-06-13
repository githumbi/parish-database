<?php 
    include 'include/db.php';
    include 'include/index.db.php';
    include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">individual details</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <main class="page landing-page"></main>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">MEMBERS DETAILS</span></strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="d-inline" data-aos="fade" style="background-color:#d60606;">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
		<tr>
      <th>No.</th>
			<th>Name</th>
      <th>Phone Number</th>
			<th>Email</th>
      <th>Residence</th>		
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
		</tr>
		<?php }


		?>
		
	</tbody>
    </table></div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>