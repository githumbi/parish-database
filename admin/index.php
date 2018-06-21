<?php 
    include 'include/db.php';

    include 'include/header.php';

    //delete records
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM congregation WHERE id=$id AND usr=  '$_SESSION[name]'");
    $_SESSION['msg'] = "The selected person has been Removed";
    header('Location: index.php');
}

 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php"><?=$_SESSION['name'];?></a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul>

                  
      
           
            <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);">LOGOUT</a>
          
      
  

                </div>
        </div>
    </nav>
    <main class="page landing-page"></main>
    <div>
         
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">MEMBERS DETAILS</span></strong></h2>
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
      <th>action</th>	
		</tr>
	</thead>
	<tbody>

		<?php
       

//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation  WHERE usr='$_SESSION[name]'");


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
                 <td>
            <a href="edit.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure You want to Edit details of Selected Person?')">Edit</a>
          </td> 
          <td>
            <a href="index.php?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure You want to Delete Selected Person?')">delete</a>
          </td>	
		</tr>
		<?php }


		?>
		
	</tbody>
    </table></div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <?php
        include 'include/footer.php';
    ?>