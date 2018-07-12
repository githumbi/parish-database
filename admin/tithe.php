<?php 
include 'include/db.php';

//retrieve tithe in form of months
$results = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', 
(feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3',
 (apr1+apr2+apr3+apr4+apr5) AS 'total4' ,(may1+may2+may3+may4+may5) AS 'total5',
 (june1+june2+june3+june4+june5) AS 'total6', (july1+july2+july3+july4+july5) AS 'total7', 
 (august1+august2+august3+august4+august5) AS 'total8', (sept1+sept2+sept3+sept4+sept5) AS 'total9',
 (oct1+oct2+oct3+oct4+oct5) AS 'total10', (nov1+nov2+nov3+nov4+nov5) AS 'total11',
 (dec1+dec2+dec3+dec4+dec5) AS 'total12' from congregation  WHERE usr = '$_SESSION[name]' ORDER BY name");

//Full sum of tithe per month
$results2 = mysqli_query($db, "SELECT *, sum(tithe1+tithe2+tithe3+tithe4+tithe5) AS 'jan',
 sum(feb1+feb2+feb3+feb4+feb5) AS 'feb', sum(march1+march2+march3+march4+march5) AS 'march', 
 sum(apr1+apr2+apr3+apr4+apr5) AS 'apr' , sum(may1+may2+may3+may4+may5) AS 'may',
 sum(june1+june2+june3+apr4+june5) AS 'june' , sum(july1+july2+july3+july4+july5) AS 'july',
 sum(august1+august2+august3+august4+august5) AS 'august' , sum(sept1+sept2+sept3+sept4+sept5) AS 'sept',
 sum(oct1+oct2+oct3+oct4+oct5) AS 'oct' , sum(nov1+nov2+nov3+nov4+nov5) AS 'nov',
 sum(dec1+dec2+dec3+dec4+dec5) AS 'dec' from congregation WHERE usr = '$_SESSION[name]'");
   

  include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="tithe.php">Tithe </a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul> <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);">LOGOUT</a></div>
        </div>
    </nav>
    <main class="page pricing-table-page"></main>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
               <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">TITHE DETAILS</span></strong></h2>
               <div class="row">
                    </div>
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
         <th colspan="1">June </th>
         <th colspan="1">July </th>
         <th colspan="1">August </th>
         <th colspan="1">September </th>
         <th colspan="1">October </th>
         <th colspan="1">November </th>
         <th colspan="1">December </th>
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
          <td><?php  echo $row['total6']; ?></td>
          <td><?php  echo $row['total7']; ?></td>
          <td><?php  echo $row['total8']; ?></td>
          <td><?php  echo $row['total9']; ?></td>
          <td><?php  echo $row['total10']; ?></td>
          <td><?php  echo $row['total11']; ?></td>
          <td><?php  echo $row['total12']; ?></td>
          <td>
            <a href="edit.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Edit Details of selected Member?')">Edit</a>
          </td>
          <td>
            <a href="individual.php?edit=<?php echo $row['id']; ?>">Details</a>
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
          <td><?php  echo $row2['june']; ?></td>
          <td><?php  echo $row2['july']; ?></td>
         <td><?php  echo $row2['august']; ?></td>
          <td><?php  echo $row2['sept']; ?></td>
          <td><?php  echo $row2['oct']; ?></td>
          <td><?php  echo $row2['nov']; ?></td>
          <td><?php  echo $row2['dec']; ?></td>
       <?php } ?>          
    </tr>
  </tbody>
    </table></div>
    </div>
    <?php
        include 'include/footer.php';
    ?>