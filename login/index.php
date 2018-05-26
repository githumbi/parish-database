<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5">KAG DATABASE</h2>
                    <form method="post" action="login.php">
                        <div class="form-group"><label class="text-secondary"><strong>BRANCH</strong></label></div>
                        <!--
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">SELECT BRANCH</button>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" value="1">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </div>
                        -->
                        <div class="form-group"><label class="text-secondary">Branch</label>
                            <input class="form-control" type="text" required="" name="name">
                        </div>
                        <div class="form-group"><label class="text-secondary">Password</label>
                            <input class="form-control" type="password" required="" name="paswd">
                        </div>
                        <button class="btn btn-info mt-2" type="submit" name="submit">Log In</button>
                    </form>
                    <form action="logout.php">
                        <button class="btn btn-info mt-2" type="submit" name="submit">logout</button>
                    </form>
                    <?php
                        if (isset($_SESSION['id'])) {
                            echo $_SESSION['id'];
                        }else{
                            echo "Not logged in!!";
                        }
                    ?>
                    <p class="mt-3 mb-0"><a href="#" class="text-info small">Forgot your email or password?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/aldain-austria-316143-unsplash.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><div class="container text-center my-3">
<h3>Multiple Slides - Bootstrap 4</h3>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_1.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_2.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_3.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_4.jpg"></div>
            </div>
            <div class="carousel-item row no-gutters">
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_1.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_2.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_3.jpg"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="assets/img/slider_4.jpg"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div></div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>