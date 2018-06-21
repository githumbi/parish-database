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
    echo 'you are not logged in';
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
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5"><i class="fa fa-diamond"></i>&nbsp;Your company</h2>
 <form action="index.php" method="post">
        <div class="form-group">
            
        <input class="form-control" type="text" name="name" placeholder="user name">
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
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/aldain-austria-316143-unsplash.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>