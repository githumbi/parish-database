<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
$pwd = $_POST['pwd'];

$sql = ("SELECT * FROM admin WHERE name='$name' AND pwd='$pwd'");
//send the query to database
$results = $conn->query($sql);

if (!$row = $results->fetch_assoc()) {
    $_SESSION['msg'] = "You are not Logged in";
} else {
    $_SESSION['name'] = $row['name'];
    header("Location: ../admin/index.php");
}
}





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">

                     <div class="container">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-danger" role="alert"><span><strong>
                                  <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>

                    <h2 class="text-info font-weight-light mb-5"><i class="fa fa-diamond"></i>&nbsp;KAG Parish </h2>
 <form action="index.php" method="post">
        <div class="form-group">
            <select name="name">
                <?php
                 $branch= "SELECT name FROM admin";
                 $branches = $conn->query($branch);
                 while ($list= mysqli_fetch_assoc($branches)) { 
                    
                    ?>
                    <option class="form-control"  value="<?php echo $list['name']; ?>" ><?php echo $list['name']; ?></option>
                <?php }

                 ?>
               
            </select>
       <!--  <input  type="text" name="name" placeholder="user name"> -->
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="pwd" placeholder="password">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">LOGIN</button>
    </div>
</form>

                    <p class="mt-3 mb-0"><a href="#" class="text-info small">Forgot your email or password?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/images.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row people" style="background-color:#ffffff;">
                <div class="col-md-6 col-lg-4 item" style="background-color:#ffffff;"><img class="rounded-circle" src="assets/img/1.jpg">
                    <h3 class="name">Ben Johnson</h3>
                    <p class="title">Musician</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="background-color:#ffffff;"><img class="rounded-circle" src="assets/img/2.jpg">
                    <h3 class="name">Emily Clark</h3>
                    <p class="title">Artist</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="background-color:#ffffff;"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Carl Kent</h3>
                    <p class="title">Stylist</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
     <div class="footer-basic" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>