<?php
    include 'include/db.php';
   include 'include/header.php';





function change_profile_image($id, $file_temp, $file_extn){
  
    $db = mysqli_connect('localhost', 'root', '', 'parish');
  $file_path = 'profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
  move_uploaded_file($file_temp, $file_path);
  mysqli_query($db, "UPDATE congregation SET profile='".$file_path."'  WHERE id =$id");

}



//update records

if (isset($_POST['update'])) {
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $residence = $_POST['residence'];
  $interdict = $_POST['interdict'];
  $message = $_POST['message'];
  $tithe1 = $_POST['tithe1'];$tithe2 = $_POST['tithe2'];$tithe3= $_POST['tithe3'];$tithe4= $_POST['tithe4'];$tithe5= $_POST['tithe5'];
  $feb1=$_POST['feb1'];$feb2=$_POST['feb2'];$feb3=$_POST['feb3'];$feb4=$_POST['feb4'];$feb5=$_POST['feb5'];
  $march1=$_POST['march1'];$march2=$_POST['march2'];$march3=$_POST['march3'];$march4=$_POST['march4'];$march5=$_POST['march5'];
  $apr1 = $_POST['apr1'];$apr2 = $_POST['apr2'];$apr3= $_POST['apr3'];$apr4=$_POST['apr4'];$apr5= $_POST['apr5'];
  $may1 = $_POST['may1'];$may2 = $_POST['may2'];$may3= $_POST['may3'];$may4= $_POST['may4'];$may5= $_POST['may5'];
  $june1 = $_POST['june1'];$june2 = $_POST['june2'];$june3= $_POST['june3'];$june4= $_POST['june4'];$june5= $_POST['june5'];
  $july1 = $_POST['july1'];$july2 = $_POST['july2'];$july3= $_POST['july'];$july4= $_POST['july4'];$july5= $_POST['july5'];
  $august1 = $_POST['august1'];$august2 = $_POST['august2'];$august3= $_POST['august3'];$august4= $_POST['august4'];$august5= $_POST['august5'];
  $sept1 = $_POST['sept1'];$sept2 = $_POST['sept2'];$sept3= $_POST['sept3'];$sept4= $_POST['sept4'];$sept5= $_POST['sept5'];
  $oct1 = $_POST['oct1'];$oct2 = $_POST['oct2'];$oct3= $_POST['oct3'];$oct4= $_POST['oct4'];$oct5= $_POST['oct5'];
  $nov1 = $_POST['nov1'];$nov2 = $_POST['nov2'];$nov3= $_POST['nov3'];$nov4= $_POST['nov4'];$nov5= $_POST['nov5'];
  $dec1 = $_POST['dec1'];$dec2 = $_POST['dec2'];$dec3= $_POST['dec3'];$dec4= $_POST['dec4'];$dec5= $_POST['dec5'];
  $id= $_POST['id'];

  mysqli_query($db, "UPDATE congregation SET phone ='$phone', email='$email', residence='$residence',  interdict='$interdict',
   tithe1='$tithe1', tithe2='$tithe2', tithe3='$tithe3', tithe4='$tithe4',tithe5='$tithe5', feb1='$feb1', feb2='$feb2',
    feb3='$feb3', feb4='$feb4',feb5='$feb5', march1='$march1', march2='$march2', march3='$march3', march4='$march4', 
    march5='$march5', apr1='$apr1', apr2='$apr2', apr3='$apr3', apr4='$apr4',apr5='$apr5',may1='$may1', may2='$may2', 
    may3='$may3', may4='$may4',may5='$may5',
    june1='$june1', june2='$june2', june3='$june3', june4='$june4',june5='$june5',
    july1='$july1', july2='$july2',july3='$july3', july4='$july4',july5='$july5', 
    august1='$august1', august2='$august2', august3='$august3', august4='$august4',august5='$august5',
    sept1='$sept1', sept2='$sept2', sept3='$sept3', sept4='$sept4',sept5='$sept5',
    oct1='$oct1', oct2='$oct2', oct3='$oct3', oct4='$oct4',oct5='$oct5',
    nov1='$nov1', nov2='$nov2', nov3='$nov3', nov4='$nov4',nov5='$nov5',
    dec1='$dec1', dec2='$dec2', dec3='$dec3', dec4='$dec4',dec5='$dec5', 
    message='$message' WHERE id=$id ");

  $_SESSION['msg'] = "The information has been Updated";
  header('Location: index.php');
  
}



//retrieve tithe in form of months
$results = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', 
(feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3',
 (apr1+apr2+apr3+apr4+apr5) AS 'total4' ,(may1+may2+may3+may4+may5) AS 'total5',
 (june1+june2+june3+june4+june5) AS 'total6', (july1+july2+july3+july4+july5) AS 'total7', 
 (august1+august2+august3+august4+august5) AS 'total8', (sept1+sept2+sept3+sept4+sept5) AS 'total9',
 (oct1+oct2+oct3+oct4+oct5) AS 'total10', (nov1+nov2+nov3+nov4+nov5) AS 'total11',
 (dec1+dec2+dec3+dec4+dec5) AS 'total12' from congregation;");



//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', 
  (feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3',
   (apr1+apr2+apr3+apr4+apr5) AS 'total4' ,(may1+may2+may3+may4+may5) AS 'total5',
   (june1+june2+june3+june4+june5) AS 'total6', (july1+july2+july3+july4+july5) AS 'total7', 
   (august1+august2+august3+august4+august5) AS 'total8', (sept1+sept2+sept3+sept4+sept5) AS 'total9',
   (oct1+oct2+oct3+oct4+oct5) AS 'total10', (nov1+nov2+nov3+nov4+nov5) AS 'total11',
   (dec1+dec2+dec3+dec4+dec5) AS 'total12'   from congregation WHERE id=$id;");
  $record = mysqli_fetch_array($rec);
  $name = $record['name'];
  $phone= $record['phone'];
  $email = $record['email'];
  $residence = $record['residence'];
  $interdict = $record['interdict'];
  $message = $record['message'];

  //the tithe variables represent january!! Don't confuse
  $tithe1 = $record['tithe1'];$tithe2 = $record['tithe2'];$tithe3 = $record['tithe3'];$tithe4 = $record['tithe4'];$tithe5 = $record['tithe5'];$total = $record['total'];
  $feb1 = $record['feb1'];$feb2 = $record['feb2'];$feb3 = $record['feb3'];$feb4 = $record['feb4'];$feb5 = $record['feb5'];$total2 = $record['total2'];
  $march1 = $record['march1'];$march2 = $record['march2'];$march3 = $record['march3'];$march4 = $record['march4'];$march5 = $record['march5'];$total3 = $record['total3'];
  $apr1 = $record['apr1'];$apr2 = $record['apr2'];$apr3 = $record['apr3'];$apr4 = $record['apr4'];$apr5 = $record['apr5'];$total4 = $record['total4'];
  $may1 = $record['may1'];$may2 = $record['may2'];$may3 = $record['may3'];$may4 = $record['may4'];$may5 = $record['may5'];$total5 = $record['total5'];
  $june1 = $record['june1'];$june2 = $record['june2'];$june3 = $record['june3'];$june4 = $record['june4'];$june5 = $record['june5'];$total6 = $record['total6'];
  $july1 = $record['july1'];$july2 = $record['july2'];$july3 = $record['july3'];$july4 = $record['july4'];$july5 = $record['july5'];$total7 = $record['total7'];
  $august1 = $record['august1'];$august2 = $record['august2'];$august3 = $record['august3'];$august4 = $record['august4'];$august5 = $record['august5'];$total8 = $record['total8'];
  $sept1 = $record['sept1'];$sept2 = $record['sept2'];$sept3 = $record['sept3'];$sept4 = $record['sept4'];$sept5 = $record['sept5'];$total9 = $record['total9'];
  $oct1 = $record['oct1'];$oct2 = $record['oct2'];$oct3 = $record['oct3'];$oct4 = $record['oct4'];$oct5 = $record['oct5'];$total10 = $record['total10'];
  $nov1 = $record['nov1'];$nov2 = $record['nov2'];$nov3 = $record['nov3'];$nov4 = $record['nov4'];$nov5 = $record['nov5'];$total11 = $record['total11'];
  $dec1 = $record['dec1'];$dec2 = $record['dec2'];$dec3 = $record['dec3'];$dec4 = $record['dec4'];$dec5 = $record['dec5'];$total12 = $record['total12'];
  $profile = $record['profile'];
}
?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="report.php">Monthly Report </a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
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
    <section class="clean-block about-us" style="height:136px;">
       
    </section>
    <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">EDIT DETAILS</span></strong></h2>
     
                </div>
            </div>
        </div>



     <?php if($row = mysqli_fetch_array($results)) { ?>

<div class="container" style="background-color:rgba(246,246,246,0.76);">
    <div data-aos="fade">
        <div class="container">
          <form  method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-12" style="background-color:#ffffff;">

                        <?php
              if (isset($_FILES['profile'])===true){
                if (empty($_FILES['profile']['name'])===true){
                    echo "please choose an image!";
                } else {
                  $allowed = array('jpg','jpeg','png','gif');

                  $file_name = $_FILES['profile']['name'];
                  $file_ext = explode('.', $file_name);
                  $file_extn=strtolower(end($file_ext));
                  $file_temp = $_FILES['profile']['tmp_name'];

                  if (in_array($file_extn, $allowed)===true){
                      change_profile_image($id, $file_temp, $file_extn);
                      header("Refresh:0");
                     
                  } else {
                    echo "incorect file. Upload:";
                    echo implode(', ', $allowed);
                  }
                }
              }

              if (empty($profile) === false){
                  echo '<img class="square-circle" src="', $profile , '" alt="', $name ,'" width="200px" height="200px" style="margin:12px;">';
              }else echo '<img class="square-circle" src="profile/index.png" alt="', $name ,'" width="200px" height="200px" style="margin:12px;">';
            ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding:15px;background-color:#ffffff;">
                  <input type="file" name="profile"> 
                  <button class="btn btn-primary" type="submit" name="profile" class="btn">update</button>
                </div>
            </div>
          </form>
        </div>
    </div>

    <form method="post" action="edit.php">
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin:0;background-color:#ffffff;"><form style="background-color: white;" method="post" action="server.php"  class="table table-bordered">
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
    <tr>

      <th colspan="4"><h3><?php echo $name; ?></h3></th>
    </tr>
    <tr>
      <th scope="col">Phone number</th>
      <th scope="col">Email</th>
      <th scope="col">Residence</th>
      <th scope="col">Interdict</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="phone" size="15" value="<?php echo $phone; ?>"></td>
      <td><input type="text" name="email"  size="15"value="<?php echo $email; ?>"></td>
      <td><input type="text" name="residence" size="15" value="<?php echo $residence; ?>"></td>
      <td><input type="text" placeholder="Edit Yes or No" name="interdict" size="10" value="<?php echo $interdict; ?>"></td>
    </tr>
  </tbody>
    </table>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
    
    <tr>
      <th>Month</th>
      <th>WEEK 1</th>
      <th>WEEK 2</th>
      <th>WEEK 3</th>
      <th>WEEK 4</th>
      <th>WEEK 5</th>
      <th>Total</th>
     
    </tr>
  </thead>

  <tbody>

    
      

      <tr> 
          <td>January 2018</td> 
          <td><input type="text" name="tithe1" size="7" value="<?php echo $tithe1; ?>"></td>
          <td><input type="text" name="tithe2" size="7" value="<?php echo $tithe2; ?>"></td>
          <td><input type="text" name="tithe3" size="7" value="<?php echo $tithe3; ?>"></td>
          <td><input type="text" name="tithe4" size="7" value="<?php echo $tithe4; ?>"></td>
          <td><input type="text" name="tithe5" size="7" value="<?php echo $tithe5; ?>"></td>
          <td><?php echo $total; ?></td>
      </tr>

       <tr> 
          <td>February 2018</td> 
          <td><input type="text" name="feb1" size="7" value="<?php echo $feb1; ?>"></td>
          <td><input type="text" name="feb2" size="7" value="<?php echo $feb2; ?>"></td>
          <td><input type="text" name="feb3" size="7" value="<?php echo $feb3; ?>"></td>
          <td><input type="text" name="feb4" size="7" value="<?php echo $feb4; ?>"></td>
          <td><input type="text" name="feb5" size="7" value="<?php echo $feb5; ?>"></td>
          <td><?php echo $total2; ?></td>
      </tr>

      <tr> 
          <td>March 2018</td> 
          <td><input type="text" name="march1" size="7" value="<?php echo $march1; ?>"></td>
          <td><input type="text" name="march2" size="7" value="<?php echo $march2; ?>"></td>
          <td><input type="text" name="march3" size="7" value="<?php echo $march3; ?>"></td>
          <td><input type="text" name="march4" size="7" value="<?php echo $march4; ?>"></td>
          <td><input type="text" name="march5" size="7" value="<?php echo $march5; ?>"></td>
          <td><?php echo $total3; ?></td>
      </tr>

      <tr> 
          <td>April 2018</td> 
          <td><input type="text" name="apr1" size="7" value="<?php echo $apr1; ?>"></td>
          <td><input type="text" name="apr2" size="7" value="<?php echo $apr2; ?>"></td>
          <td><input type="text" name="apr3" size="7" value="<?php echo $apr3; ?>"></td>
          <td><input type="text" name="apr4" size="7" value="<?php echo $apr4; ?>"></td>
          <td><input type="text" name="apr5" size="7" value="<?php echo $apr5; ?>"></td>
          <td><?php echo $total4; ?></td>
      </tr>

      <tr> 
          <td>May 2018</td> 
          <td><input type="text" name="may1" size="7" value="<?php echo $may1; ?>"></td>
          <td><input type="text" name="may2" size="7" value="<?php echo $may2; ?>"></td>
          <td><input type="text" name="may3" size="7" value="<?php echo $may3; ?>"></td>
          <td><input type="text" name="may4" size="7" value="<?php echo $may4; ?>"></td>
          <td><input type="text" name="may5" size="7" value="<?php echo $may5; ?>"></td>
          <td><?php echo $total5; ?></td>
      </tr>

       <tr> 
          <td>june 2018</td> 
          <td><input type="text" name="june1" size="7" value="<?php echo $june1; ?>"></td>
          <td><input type="text" name="june2" size="7" value="<?php echo $june2; ?>"></td>
          <td><input type="text" name="june3" size="7" value="<?php echo $june3; ?>"></td>
          <td><input type="text" name="june4" size="7" value="<?php echo $june4; ?>"></td>
          <td><input type="text" name="june5" size="7" value="<?php echo $june5; ?>"></td>
          <td><?php echo $total6; ?></td>
      </tr>

       <tr> 
          <td>july 2018</td> 
          <td><input type="text" name="july1" size="7" value="<?php echo $july1; ?>"></td>
          <td><input type="text" name="july2" size="7" value="<?php echo $july2; ?>"></td>
          <td><input type="text" name="july3" size="7" value="<?php echo $july3; ?>"></td>
          <td><input type="text" name="july4" size="7" value="<?php echo $july4; ?>"></td>
          <td><input type="text" name="july5" size="7" value="<?php echo $july5; ?>"></td>
          <td><?php echo $total7; ?></td>
      </tr>

       <tr> 
          <td>august 2018</td> 
          <td><input type="text" name="august1" size="7" value="<?php echo $august1; ?>"></td>
          <td><input type="text" name="august2" size="7" value="<?php echo $august2; ?>"></td>
          <td><input type="text" name="august3" size="7" value="<?php echo $august3; ?>"></td>
          <td><input type="text" name="august4" size="7" value="<?php echo $august4; ?>"></td>
          <td><input type="text" name="august5" size="7" value="<?php echo $august5; ?>"></td>
          <td><?php echo $total8; ?></td>
      </tr>

       <tr> 
          <td>sept 2018</td> 
          <td><input type="text" name="sept1" size="7" value="<?php echo $sept1; ?>"></td>
          <td><input type="text" name="sept2" size="7" value="<?php echo $sept2; ?>"></td>
          <td><input type="text" name="sept3" size="7" value="<?php echo $sept3; ?>"></td>
          <td><input type="text" name="sept4" size="7" value="<?php echo $sept4; ?>"></td>
          <td><input type="text" name="sept5" size="7" value="<?php echo $sept5; ?>"></td>
          <td><?php echo $total9; ?></td>
      </tr>

       <tr> 
          <td>oct 2018</td> 
          <td><input type="text" name="oct1" size="7" value="<?php echo $oct1; ?>"></td>
          <td><input type="text" name="oct2" size="7" value="<?php echo $oct2; ?>"></td>
          <td><input type="text" name="oct3" size="7" value="<?php echo $oct3; ?>"></td>
          <td><input type="text" name="oct4" size="7" value="<?php echo $oct4; ?>"></td>
          <td><input type="text" name="oct5" size="7" value="<?php echo $oct5; ?>"></td>
          <td><?php echo $total10; ?></td>
      </tr>

       <tr> 
          <td>nov 2018</td> 
          <td><input type="text" name="nov1" size="7" value="<?php echo $nov1; ?>"></td>
          <td><input type="text" name="nov2" size="7" value="<?php echo $nov2; ?>"></td>
          <td><input type="text" name="nov3" size="7" value="<?php echo $nov3; ?>"></td>
          <td><input type="text" name="nov4" size="7" value="<?php echo $nov4; ?>"></td>
          <td><input type="text" name="nov5" size="7" value="<?php echo $nov5; ?>"></td>
          <td><?php echo $total11; ?></td>
      </tr>

       <tr> 
          <td>dec 2018</td> 
          <td><input type="text" name="dec1" size="7" value="<?php echo $dec1; ?>"></td>
          <td><input type="text" name="dec2" size="7" value="<?php echo $dec2; ?>"></td>
          <td><input type="text" name="dec3" size="7" value="<?php echo $dec3; ?>"></td>
          <td><input type="text" name="dec4" size="7" value="<?php echo $dec4; ?>"></td>
          <td><input type="text" name="dec5" size="7" value="<?php echo $dec5; ?>"></td>
          <td><?php echo $total12; ?></td>
      </tr>

</tbody>
    </table>


      <div class="form-group">
                      <h2 style="color: black; " for="message">COMMENTS</h2>
                      <textarea style="color: black; height: 100px !important; width: 600px !important; font-size: 14px !important; background-color:   #E0E0E0;" cols="30" rows="10" class="form-control" id="message"  name="message" ><?php echo $message; ?></textarea>
                    </div>
    <?php }


    ?>
    
 
          <div class="container">
             <button class="btn btn-primary" type="submit" name="update" class="btn">update</button>
          </div>
</form></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>

</form>
</div>
    
    <div></div>
    <main class="page contact-us-page"></main>
    <?php
        include 'include/footer.php';
    ?>