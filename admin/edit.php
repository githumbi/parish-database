<?php 
    include 'include/header.php';
 ?>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active d-block" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" style="padding:3px;"><a class="nav-link" href="tithe.php">individual details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="edit.php">Edit</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">weekly offering</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                </ul><button class="btn btn-primary" type="button" style="background-color:rgb(13,230,34);">LOGOUT</button></div>
        </div>
    </nav>
    <section class="clean-block about-us" style="height:136px;">
        <div class="container">
            <div class="block-heading">
                <h1 class="text-info" style="color:#ffffff;"><strong><span style="text-decoration: underline;">EDIT DETAILS</span></strong></h1>
            </div>
        </div>
    </section>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="background-color:#ffffff;"><img class="rounded-circle" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200" width="200px" height="200px" style="margin:12px;"></div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding:15px;background-color:#ffffff;"><input type="file"></div>
            </div>
        </div>
    </div>
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
      <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
      <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
      <td><input type="text" name="residence" value="<?php echo $residence; ?>"></td>
      <td><input type="text" placeholder="Edit Yes or No" name="interdict" value="<?php echo $interdict; ?>"></td>
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

</tbody>
    </table>


      <div class="form-group">
                      <h2 style="color: black; " for="message">COMMENTS</h2>
                      <textarea style="color: black; height: 100px !important; width: 600px !important; font-size: 14px !important; background-color:   #E0E0E0;" cols="30" rows="10" class="form-control" id="message"  name="message" ><?php echo $message; ?></textarea>
                    </div>
    <?php }


    ?>
    
 
          <div class="container">
              <button type="submit" name="update" class="btn">update</button>
          </div>
</form></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
    
    <div></div>
    <main class="page contact-us-page"></main>
    <?php
        include 'include/footer.php';
    ?>