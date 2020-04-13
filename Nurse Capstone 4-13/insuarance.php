<?php 
  include('server.php');
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nurses On The Go!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Home.php">Nurses On The Go</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Nurses

                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="insuarance.php">Services
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <?php  if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Log In</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <?php  if (isset($_SESSION['username'])) : ?>
                            Welcome <strong>
                                <?php echo $_SESSION['username']; ?></strong>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- /.col-lg-3 -->

            <div class="align-self-center">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/care1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/care4.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/care3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <hr>
            <h1 class="align-self-center">
                Services We Provide
            </h1>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/elder%20care.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a>Elder Care: <br>$19 an hour*</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/dementia%20nurse.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a>Dementia Care: <br>$21 an hour*</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/injury%20nurse.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a>Injury Care: <br>$20 an hour*</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="images/specialty%20needs%20nurse.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a>Special Needs Care: <br>$21 an hour*</a>
                            </h4>

                        </div>

                    </div>

                </div>
            </div>

            <hr>
            <h1 class="align-self-center">
                We Happily Accept
            </h1>
            <hr>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.uhc.com"><img class="card-img-top" src="images/united.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.uhc.com">United Health Care</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.multiplan.com"><img class="card-img-top" src="images/multiplan.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.multiplan.com">MutiPlan</a>
                            </h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.messa.org"><img class="card-img-top" src="images/messa.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.messa.org">Messa</a>
                            </h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.hap.org"><img class="card-img-top" src="images/hap.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.hap.org">hap</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.bcbsm.com/"><img class="card-img-top" src="images/bluecross.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.bcbsm.com/">Blue Cross Blue Shield</a>
                            </h4>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a target="_blank" href="https://www.medicare.gov"><img class="card-img-top" src="images/medicare.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a target="_blank" href="https://www.medicare.gov">Medicare</a>
                            </h4>

                        </div>

                    </div>
                </div>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="footer py-5 bg-dark" style="height: 20vh">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Nurses on the Go! 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
