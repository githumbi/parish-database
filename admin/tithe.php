<?php 
    include 'include/tithe.db.php';
    include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" style="padding:3px;"><a class="nav-link active" href="tithe.php">individual details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="edit.php">Edit</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <main class="page pricing-table-page"></main>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">TITHE / OFFERING</span></strong></h2>
                </div>
            </div>
        </div>
        <div class="container" style="background-color:#ffffff;"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
    <tr>
      <th colspan="3"></th>
    </tr>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Interdict</th>
      <th colspan="1">January </th>
       <th colspan="1">February </th>
        <th colspan="1">March </th>
         <th colspan="1">April </th>
         <th colspan="1">May </th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $i=1;
     while ($row = mysqli_fetch_array($results)){ ?>
      <tr>
         <td> <?php
                echo $i;
                $i++;
            ?>
          </td>
          <td><?php echo $row['name']; ?></td>
          <td><?php  echo $row['interdict']; ?></td>
          <td><?php  echo $row['total']; ?></td>
          <td><?php  echo $row['total2']; ?></td>
          <td><?php  echo $row['total3']; ?></td>
          <td><?php  echo $row['total4']; ?></td>
          <td><?php  echo $row['total5']; ?></td>
          <td>
            <a href="../individual/edit.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Edit Details of selected Member?')">Edit</a>
          </td>
          <td>
            <a href="../individual/tithe.php?edit=<?php echo $row['id']; ?>">Details</a>
          </td> 
         
    
    </tr>
    <?php }    ?>
     <tr>
      <td></td>
      <td></td>
      <td>TOTAL</td>
       <?php
      if ($row2 = mysqli_fetch_array($results2)){  ?>
      
         <td><?php  echo $row2['jan']; ?></td>
          <td><?php  echo $row2['feb']; ?></td>
         <td><?php  echo $row2['march']; ?></td>
          <td><?php  echo $row2['apr']; ?></td>
          <td><?php  echo $row2['may']; ?></td>
       <?php } ?>          
    </tr>
  </tbody>
    </table></div>
    </div>
    <?php
        include 'include/footer.php';
    ?>