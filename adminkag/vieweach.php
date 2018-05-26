<?php
include 'viewserver.php';


$sql = "SELECT * FROM form";

$result1 = $db->query($sql);

//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT * from form WHERE id=$id;");
  $record = mysqli_fetch_array($rec);
  
}


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submission Form</title>
   <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/icomoon.css">
  </head>


<body style="background-image: wallpaper.jpg;">
      
     
      
         
     
       <?php if ($mbers= $record) { ?>

       
  <form method="post" action="viewserver.php" class="table table-bordered">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 



  <div class="container">

<table class="table table-bordered">
  <h1 style="text-transform: uppercase;">Submission form for <?php echo $mbers['username']; ?></h1>
  <thead>
    
    <tr>
      <th>No.</th>
      <th>QUESTIONS</th>
      <th>RESPONSES</th>
      
     
    </tr>
  </thead>

  <tbody>

    
      

      <tr> 
          <td>1</td>
          <td>Date</td> 
          <td><?php echo $mbers['datesubmit']; ?></td>
      </tr>
      <tr> 
          <td>2</td>
          <td>Telephone No</td> 
          <td><?php echo $mbers['phone']; ?></td>
      </tr>
      <tr> 
          <td>3</td>
          <td>Pysical Address(sehemu ya mji)</td> 
          <td><?php echo $mbers['address']; ?></td>
      </tr>
      <tr> 
          <td>4</td>
          <td>Plot</td> 
          <td><?php echo $mbers['plot']; ?></td>
      </tr>
      <tr> 
          <td>5</td>
          <td>Housenumber</td> 
          <td><?php echo $mbers['housenumber']; ?></td>
      </tr>
      <tr> 
          <td>6</td>
          <td>Date Saved</td> 
          <td><?php echo $mbers['datesaved']; ?></td>
      </tr>
       <tr> 
          <td>7</td>
          <td>Have you been baptized by water?</td> 
          <td><?php echo $mbers['water']; ?> on <?php echo $mbers['datewater']; ?> </td>
      </tr>
      <tr> 
          <td>8</td>
          <td>Have you been baptized by Holy Spirit?</td> 
          <td><?php echo $mbers['holyspirit']; ?></td>
      </tr>
      <tr> 
          <td>9</td>
          <td>if not, do you seek to be baptized?</td> 
          <td><?php echo $mbers['baptized']; ?></td>
      </tr>
      <tr> 
          <td>10</td>
          <td>Are you Faithfull in paying your Tithe?</td> 
          <td><?php echo $mbers['tithe']; ?></td>
      </tr>
      <tr> 
          <td>11</td>
          <td>Do you agree with our Teachings</td> 
          <td><?php echo $mbers['teachings']; ?></td>
      </tr>
      <tr> 
          <td>12</td>
          <td> Attending church reguraly</td> 
          <td><?php echo $mbers['attend']; ?></td>          
      </tr>
      <tr> 
          <td>13</td>
          <td> Belong and actively participate in the weekly meeting</td> 
          <td><?php echo $mbers['participate']; ?></td>          
      </tr>
      <tr> 
          <td>14</td>
          <td> Being a member of a Home Cell</td> 
          <td><?php echo $mbers['cell']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Pray, support and submit to the leadership of our church to enable us to serve you Better</td> 
          <td><?php echo $mbers['support']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Support church mission Financially</td> 
          <td><?php echo $mbers['mission']; ?></td>          
      </tr>
      <tr> 
          <td>15</td>
          <td> Actively mobilize the community through witnessing and invitations</td> 
          <td><?php echo $mbers['mobilize']; ?></td>          
      </tr>
      <tr> 
          <td></td>
          <td> APPROVED</td> 
          <td><input type="radio" name="approved" value="Yes">Yes
            <input type="radio" name="approved" value="No">No</td>          
      </tr>


      
</tbody>
</table>

    
       <?php  } ?>
       <div class="container">
              <button type="submit" name="update" class="btn">update</button>
          </div>
        </div>
        </form> 
  </body>
</html>







