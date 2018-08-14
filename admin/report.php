<?php 
    include 'include/db.php';

    include 'include/header.php';

   if (isset($_POST['submit'])) {
    $id = $_POST['month'];
      mysqli_query($db, "UPDATE monthlyreport SET usr= '$_SESSION[name]', sch1='$_POST[sch1]', sch2='$_POST[sch2]', sch3='$_POST[sch3]' , sch4='$_POST[sch4]' , sch5='$_POST[sch5]',child1 = '$_POST[child1]' ,child2 = '$_POST[child2]',child3 = '$_POST[child3]',child4 = '$_POST[child4]',child5 = '$_POST[child5]', male1 = '$_POST[male1]' , male2 = '$_POST[male2]', male3 = '$_POST[male3]', male4 = '$_POST[male4]', male5 = '$_POST[male5]', female1 = '$_POST[female1]' , female2 = '$_POST[female2]', female3 = '$_POST[female3]', female4 = '$_POST[female4]', female5 = '$_POST[female5]',funds = '$_POST[funds]' , sacco = '$_POST[sacco]', fellowship = '$_POST[fellowship]', youth = '$_POST[youth]', watoto = '$_POST[watoto]' , sundayschool= '$_POST[sundayschool]', mchungaji= '$_POST[mchungaji]', other= '$_POST[other]', maalum= '$_POST[maalum]', support= '$_POST[support]', homemission= '$_POST[homemission]' , use1= '$_POST[use1]', use2= '$_POST[use2]' ,use3= '$_POST[use3]' , use4= '$_POST[use4]', use1s= '$_POST[use1s]', use2s= '$_POST[use2s]' ,use2s= '$_POST[use2s]' ,use3s= '$_POST[use3s]' , use4s= '$_POST[use4s]', msaada= '$_POST[msaada]', michango= '$_POST[michango]', districtmission= '$_POST[districtmission]', kagmission= '$_POST[kagmission]', mission1= '$_POST[mission1]' , mission2= '$_POST[mission2]' , mission3= '$_POST[mission3]' , mission4= '$_POST[mission4]' , mission1s= '$_POST[mission1s]' , mission2s= '$_POST[mission2s]' , mission3s= '$_POST[mission3s]' , mission4s= '$_POST[mission4s]' WHERE month='$id' AND usr='$_SESSION[name]' ");
             $_SESSION['msg'] = "The information has been Updated";

    
    
    }


 ?>
            <div class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                
                    <li class="nav-item" role="presentation"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="style="text-decoration: underline;"nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="tithe.php">Tithe </a></li>
                   <li class="nav-item" role="presentation" ><a class="nav-link active" href="report.php">Monthly Report </a></li>
                    
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
    <!-- <div class="d-inline" data-aos="fade" style="background-color:#d60606;">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      
	                     <tr><td>City:</td><td><select name="city">
                        <option value="">... Select month...</option>
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                      </select></td></tr>
                  </table>

                </div>
            </div>
        </div>
    </div> -->

    <div class="d-inline" data-aos="fade" style="background-color:#d60606;">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col">
                 <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Select Month
                      </button>
                      <div class="dropdown-menu">
                      <?php  
                      $months = mysqli_query($db, "SELECT month FROM monthlyreport WHERE usr=''");
                      while ($row = mysqli_fetch_array($months)){ 
                        ?>
                        <a class="dropdown-item" href="report.php?edit=<?php echo $row['month']; ?>"><?php echo $row['month']; ?></a>
                      <?php } ?>
                      </div>
                    </div> 
                 

                </div>
            </div>
        </div>
    </div>



<?php
 if (isset($_GET['edit'])) {
   $id = $_GET['edit'];
    $branch = $_SESSION['name'];


    //query to check if the selected month and user row exist .. if not a row is inserted
    $all = "SELECT * FROM monthlyreport WHERE usr ='$_SESSION[name]' AND month = '$id' ";
    $record = mysqli_query($db, $all);
    $confirm = mysqli_num_rows($record);
    if ($confirm==0) {
        $fetchy= "INSERT INTO monthlyreport (usr, month) VALUES ('$_SESSION[name]', '$id')";
        mysqli_query($db, $fetchy);
     } 
     // end
   
   //fetch records from monthlyreport table
    $fetch= mysqli_query($db, "SELECT *, sum(sch1+sch2+sch3+sch4+sch5) AS 'total' , sum(funds+sacco+fellowship+youth+watoto+sundayschool+mchungaji+other+maalum+support+homemission) AS 'jumla' , sum(use1s+use2s+use3s+use4s+msaada+michango) AS 'jumlamatumizi',sum(districtmission+kagmission+mission1s+mission2s+mission3s+mission4s) AS 'jumlamission'  FROM monthlyreport WHERE month = '$id' AND usr = '$_SESSION[name]'");
    $record = mysqli_fetch_array($fetch);
    //end
  
   
     //fetch records from offering table
    $offering = mysqli_query($db, "SELECT * ,(offering_1+offering_2+offering_3+offering_4+offering_5) AS 'total_offering' FROM offering WHERE usr = '$_SESSION[name]' AND offering = '$id'");
            $recs= mysqli_fetch_array($offering);
       //end

            //display details of selected month
    if ($id==='january') {
           $tithe = mysqli_query($db, "SELECT sum(tithe1) AS 'tithe1_sum', sum(tithe2) AS 'tithe2_sum', sum(tithe3) AS 'tithe3_sum', sum(tithe4) AS 'tithe4_sum' , sum(tithe5) AS 'tithe5_sum', sum(tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
       }

     if ($id==='february') {
           $tithe = mysqli_query($db, "SELECT sum(feb1) AS 'tithe1_sum', sum(feb2) AS 'tithe2_sum', sum(feb3) AS 'tithe3_sum', sum(feb4) AS 'tithe4_sum' , sum(feb5) AS 'tithe5_sum', sum(feb1+feb2+feb3+feb4+feb5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);       
    }
   
    if ($id==='march') {
           $tithe = mysqli_query($db, "SELECT sum(march1) AS 'tithe1_sum', sum(march2) AS 'tithe2_sum', sum(march3) AS 'tithe3_sum', sum(march4) AS 'tithe4_sum' , sum(march5) AS 'tithe5_sum', sum(march1+march2+march3+march4+march5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

    if ($id==='april') {
           $tithe = mysqli_query($db, "SELECT sum(apr1) AS 'tithe1_sum', sum(apr2) AS 'tithe2_sum', sum(apr3) AS 'tithe3_sum', sum(apr4) AS 'tithe4_sum' , sum(apr5) AS 'tithe5_sum', sum(apr1+apr2+apr3+apr4+apr5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

     if ($id==='may') {
           $tithe = mysqli_query($db, "SELECT sum(may1) AS 'tithe1_sum', sum(may2) AS 'tithe2_sum', sum(may3) AS 'tithe3_sum', sum(may4) AS 'tithe4_sum' , sum(may5) AS 'tithe5_sum', sum(may1+may2+may3+may4+may5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

     if ($id==='june') {
           $tithe = mysqli_query($db, "SELECT sum(june1) AS 'tithe1_sum', sum(june2) AS 'tithe2_sum', sum(june3) AS 'tithe3_sum', sum(june4) AS 'tithe4_sum' , sum(june5) AS 'tithe5_sum', sum(june1+june2+june3+june4+june5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

     if ($id==='july') {
           $tithe = mysqli_query($db, "SELECT sum(july1) AS 'tithe1_sum', sum(july2) AS 'tithe2_sum', sum(july3) AS 'tithe3_sum', sum(july4) AS 'tithe4_sum' , sum(july5) AS 'tithe5_sum', sum(july1+july2+july3+july4+july5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }


     if ($id==='august') {
           $tithe = mysqli_query($db, "SELECT sum(august1) AS 'tithe1_sum', sum(august2) AS 'tithe2_sum', sum(august3) AS 'tithe3_sum', sum(august4) AS 'tithe4_sum' , sum(august5) AS 'tithe5_sum', sum(august1+august2+august3+august4+august5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

      if ($id==='september') {
           $tithe = mysqli_query($db, "SELECT sum(sept1) AS 'tithe1_sum', sum(sept2) AS 'tithe2_sum', sum(sept3) AS 'tithe3_sum', sum(sept4) AS 'tithe4_sum' , sum(sept5) AS 'tithe5_sum', sum(sept1+sept2+sept3+sept4+sept5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

      if ($id==='october') {
           $tithe = mysqli_query($db, "SELECT sum(oct1) AS 'tithe1_sum', sum(oct2) AS 'tithe2_sum', sum(oct3) AS 'tithe3_sum', sum(oct4) AS 'tithe4_sum' , sum(oct5) AS 'tithe5_sum', sum(oct1+oct2+oct3+oct4+oct5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

      if ($id==='november') {
           $tithe = mysqli_query($db, "SELECT sum(nov1) AS 'tithe1_sum', sum(nov2) AS 'tithe2_sum', sum(nov3) AS 'tithe3_sum', sum(nov4) AS 'tithe4_sum' , sum(nov5) AS 'tithe5_sum', sum(nov1+nov2+nov3+nov4+nov5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }

      if ($id==='december') {
           $tithe = mysqli_query($db, "SELECT sum(dec1) AS 'tithe1_sum', sum(dec2) AS 'tithe2_sum', sum(dec3) AS 'tithe3_sum', sum(dec4) AS 'tithe4_sum' , sum(dec5) AS 'tithe5_sum', sum(dec1+dec2+dec3+dec4+dec5) AS 'total' FROM congregation WHERE usr = '$_SESSION[name]'");
            $rec = mysqli_fetch_array($tithe);
           
    }
    $offering= mysqli_query($db, "SELECT * FROM offering WHERE usr = '$_SESSION[name]'");


    // $member = "SELECT child, male, female FROM monthlyreport WHERE usr = '$_SESSION[name]' AND month = '$id'";
    // $members  = mys

     
   

 ?>
     <div class="d-inline" data-aos="fade" style="background-color:#d60606;">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <form method="post" action="">
       <thead>
    <tr>
      <th>Date</th>
      <th>sunday school</th>
      <th>tithe</th>
      <th>offering</th>
       <th>male</th>
      <th>Female</th>
      <th>child</th> 
      <th>Pastors Signature</th>
      <th>Treasurer Signature</th>
    </tr>
  </thead>
  
  <tbody>

    <input class ="inputs" type="hidden" name="month" value="<?php echo $id ?>">
       

      <tr>   
            <td>week 1</td>
             <td><input class ="inputs" type="text" name="sch1" value="<?php echo $record['sch1']; ?>"></td>
             <td><?php echo $rec['tithe1_sum']; ?></td>
             <td><?php echo $recs['offering_1']; ?></td>
             <td><input class ="inputs" type="text" name="male1" value="<?php echo $record['male1']; ?>"></td>
             <td><input class ="inputs" type="text" name="female1" value="<?php echo $record['female1']; ?>"></td>
             <td><input class ="inputs" type="text" name="child1" value="<?php echo $record['child1']; ?>"></td>

    </tr>
    <tr>   
            <td>week 2</td>
             <td><input class ="inputs" type="text" name="sch2" value="<?php echo $record['sch2']; ?>"></td>
              <td><?php echo $rec['tithe2_sum']; ?></td>
              <td><?php echo $recs['offering_2']; ?></td>
              <td><input class ="inputs" type="text" name="male2" value="<?php echo $record['male2']; ?>"></td>
             <td><input class ="inputs" type="text" name="female2" value="<?php echo $record['female2']; ?>"></td>
             <td><input class ="inputs" type="text" name="child2" value="<?php echo $record['child2']; ?>"></td>
    </tr>
     <tr>   
            <td>week 3</td>
             <td><input class ="inputs" type="text" name="sch3" value="<?php echo $record['sch3']; ?>"></td>
              <td><?php echo $rec['tithe3_sum']; ?></td>
              <td><?php echo $recs['offering_3']; ?></td>
              <td><input class ="inputs" type="text" name="male3" value="<?php echo $record['male3']; ?>"></td>
             <td><input class ="inputs" type="text" name="female3" value="<?php echo $record['female3']; ?>"></td>
             <td><input class ="inputs" type="text" name="child3" value="<?php echo $record['child3']; ?>"></td>
    </tr>
     <tr>   
            <td>week 4</td>
             <td><input class ="inputs" type="text" name="sch4" value="<?php echo $record['sch4']; ?>"></td>
              <td><?php echo $rec['tithe4_sum']; ?></td>
              <td><?php echo $recs['offering_4']; ?></td>
              <td><input class ="inputs" type="text" name="male4" value="<?php echo $record['male4']; ?>"></td>
             <td><input class ="inputs" type="text" name="female4" value="<?php echo $record['female4']; ?>"></td>
             <td><input class ="inputs" type="text" name="child4" value="<?php echo $record['child4']; ?>"></td>
    </tr>
    <tr>   
            <td>week 5</td>
             <td><input class ="inputs" type="text" name="sch5" value="<?php echo $record['sch5']; ?>"></td>
              <td><?php echo $rec['tithe5_sum']; ?></td>
              <td><?php echo $recs['offering_5']; ?></td>
              <td><input class ="inputs" type="text" name="male5" value="<?php echo $record['male5']; ?>"></td>
             <td><input class ="inputs" type="text" name="female5" value="<?php echo $record['female5']; ?>"></td>
             <td><input class ="inputs" type="text" name="child5" value="<?php echo $record['child5']; ?>"></td>
    </tr>
    <tr>   
            <td>TOTAL</td>
             <td><?php echo $record['total']; ?></td>
              <td><?php echo $rec['total']; ?></td>
              <td><?php echo $recs['total_offering']; ?></td>
    </tr>

    
  </tbody>

  

    </table>
    <br><br><br><br>


   
    
            <ul class="list-group">
            <style type="text/css">
              input[type=text] {
          background: transparent;
          border: none;
          border-bottom: 1px solid #000000;
      }
            </style>
            <h2>KUTUMIA KWA SEHEMU</h2>
        <li class="list-group-item">10% Kwa general Funds <input type="text" name="funds" value="<?php echo $record['funds']; ?>"></li>
        <h2>Sadaka na sehemu</h2>
        <li class="list-group-item">5% kwa SACCO <input type="text" name="sacco" value="<?php echo $record['sacco']; ?>">
            <ul>
              <li>5% kutoka kwa men Fellowship Kshs <input type="text" name="fellowship" value="<?php echo $record['fellowship']; ?>"></li>
              <li>5% kutoka kwa Youth Kshs <input type="text" name="youth" value="<?php echo $record['youth']; ?>"></li>
              <li>5% kutoka kwa Watoto Kshs <input type="text" name="watoto" value="<?php echo $record['watoto']; ?>"></li>
            </ul>
        </li>
        <li class="list-group-item">30% kwa sunday school Kshs <input type="text" name="sundayschool" value="<?php echo $record['sundayschool']; ?>"></li>
        <li class="list-group-item">Fungu la kumi la mchungaji kutoka Kanisani Kshs <input type="text" name="mchungaji" value="<?php echo $record['mchungaji']; ?>"> </li>
        <li class="list-group-item">Fungu la kumi la mapato mengine Ksh <input type="text" name="other" value="<?php echo $record['other']; ?>"></li>
        <li class="list-group-item">Sadaka maalum (christmas, Easter e.t.c) Kshs <input type="text" name="maalum" value="<?php echo $record['maalum']; ?>"></li>
        <li class="list-group-item">Children home support Kshs <input type="text" name="support" value="<?php echo $record['support']; ?>"></li>
        <li class="list-group-item">Home mission  Ksh <input type="text" name="homemission" value="<?php echo $record['homemission']; ?>"></li>
        <li class="list-group-item">JUMLA ILIYOTUMIWA Ksh <span></span><?php echo $record['jumla']; ?></li>
      </ul>
   

      
      <ul class="list-group">
        <h3>MATUMIZI</h3>
      <li class="list-group-item">Matumizi ya Kanisa
        <ul>
        <li>a) <input  type="text" name="use1" value="<?php echo $record['use1']; ?>">Kshs<input class ="inputs" type="text" name="use1s" value="<?php echo $record['use1s']; ?>"></li>
        <li>b) <input  type="text" name="use2" value="<?php echo $record['use2']; ?>">Kshs<input class ="inputs" type="text" name="use2s" value="<?php echo $record['use2s']; ?>"></li>
        <li>c) <input  type="text" name="use3" value="<?php echo $record['use3']; ?>">Kshs<input class ="inputs" type="text" name="use3s" value="<?php echo $record['use3s']; ?>"></li>
        <li>d) <input  type="text" name="use4" value="<?php echo $record['use4']; ?>">Kshs<input class ="inputs" type="text" name="use4s" value="<?php echo $record['use4s']; ?>"></li>
      </ul>
      </li>
      <li class="list-group-item">Msaada wa mchungaji Ksh <input type="text" name="msaada" value="<?php echo $record['msaada']; ?>"></li>
      <li class="list-group-item">Michango ya matumizi mengine kanisani Ksh <input type="text" name="michango" value="<?php echo $record['michango']; ?>"></li>
      <li class="list-group-item">JUMLA YA MATUMIZI Ksh<span></span> <?php echo $record['jumlamatumizi']; ?></li>
      
    </ul>

    <ul class="list-group">
        <h3>MISSIONS</h3>
      
      <li class="list-group-item">District Mission Ksh <input type="text" name="districtmission" value="<?php echo $record['districtmission']; ?>"></li>
      <li class="list-group-item">KAG mission Ksh <input type="text" name="kagmission" value="<?php echo $record['kagmission']; ?>"></li>
      <li class="list-group-item">Monthly missionary support
        <ul>
          <li>a) <input  type="text" name="mission1" value="<?php echo $record['mission1']; ?>">Kshs<input class ="inputs" type="text" name="mission1s" value="<?php echo $record['mission1s']; ?>"></li>
        <li>b) <input  type="text" name="mission2" value="<?php echo $record['mission2']; ?>">Kshs<input class ="inputs" type="text" name="mission2s" value="<?php echo $record['mission2s']; ?>"></li>
        <li>c) <input  type="text" name="mission3" value="<?php echo $record['mission3']; ?>">Kshs<input class ="inputs" type="text" name="mission3s" value="<?php echo $record['mission3s']; ?>"></li>
        <li>d) <input  type="text" name="mission4" value="<?php echo $record['mission4']; ?>">Kshs<input class ="inputs" type="text" name="mission4s" value="<?php echo $record['mission4s']; ?>"></li>
        </ul>
      
      </li>
       <li class="list-group-item">JUMLA I Ksh <span></span><?php echo $record['jumlamission']; ?></li>
        </ul>
        <br><br><br>
     

    
  


    <!-- <button type="submit" name="submit">update</button> -->
  <div class="container">
             <button class="btn btn-primary" type="submit" name="submit" class="btn">update</button>
          </div>
          <br><br>

  </form>
</div>
            </div>
        </div>
    </div>
<?php } else{
  echo " <div class='container'><h2 style='color:rgb(255,255,255);'><strong><span>SELECT MONTH</span></strong></h2></div>";
}?>


    




    <br><br><br><br><br><br>
    <?php
        include 'include/footer.php';
    ?>