<?php
include ('server.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/icomoon.css">
</head>
<body>
	<nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img class="img-responsive" src="../img.png">
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php">Home</a></li>
              <li  class="active"><a href="signup.php">Signup Members</a></li>
              <li><a href="../input/input.php">Individuals Offering/Tithe</a></li>
              <li><a href="../offering/offering.php">Offering s</a></li>
              <li><a href="../view.php">Submission List</a></li>
              <li>
              </div>

                                  </div>
                                </div>
                              </div>
                   </li>
            </ul>

          </div>
        </div>
      </nav>

      <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2 style=" color: white; text-align: center;">SIGNUP / EDIT / REMOVE MEMBER's</h2>
            </div>
          </div>
        </div>





<div class="col-md-4" >
	<form  style="background-color: white;" method="post" action="server.php"  class="table table-bordered">
	
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
           <input type="date" name="date" placeholder="MM/DD/YYYY" value="<?php echo $date; ?>" class="form-control">
    </div>
     

		<div class="form-group">
			<?php if ($edit_state == false):  ?>
		<button type="submit" name="save" class="btn">save</button>
		    <?php else: ?>
		<button type="submit" name="update" class="btn">update</button>
			<?php endif ?>

		  
		  
		</div>

		
	
		</form>
</div>

        <div class="col-md-8">

        
            <?php if (isset($_SESSION['msg'])):  ?>
            <div class="msg">
              <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              ?>
            </div>
            <?php endif ?>

<table style="background-color: white;" class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Residence</th>
      <th>Baptism</th>
      <th colspan="2">Action</th>
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
          <td><?php  echo $row['date']; ?></td>
          <td>
            <a href="signup.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure You want to Edit details of Selected Person?')">Edit</a>
          </td> 
          <td>
            <a href="server.php?del=<?php echo $row[$id]; ?>" onclick="return confirm('Are you sure You want to Delete Selected Person?')">delete</a>
          </td>
    
    </tr>
    <?php }  ?>
    
  </tbody>

    </table>
</div>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>
  
   

</body>
</html>