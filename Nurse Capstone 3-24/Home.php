<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
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

<body style="background: url('henry.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Home.php">Nurses On The Go</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Home.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Nurses</a>
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
                        <?php  if (isset($_SESSION['username'])) : ?>
                        <a class="nav-link">
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


    <!-- /.col-lg-3 -->

    <br>

    <div class="container" style="height: 90vh">
        <div class="card">
            <div class="card-body">
                <h1 style="text-align: center">Welcome To Nurses On The Go!</h1>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="card-body">
                        <p class="lead">About Us </p>
                        <p>Nurses On the Go is a service that brings a great selection of nurses to you for your home health needs. They specialize in a variety of fields such as elderly care, special needs, injuries, and more. If you find a nurse that you like or need please feel free to contact us. We will keep your loved one's safe and bring you a peace of mind that they are being cared of in the best possible way!</p>

                        <strong>
                            <p class="mx-auto" style="text-align: center; font-size: x-large"><a href="register.php">Sign Up Now!</a></p>
                        </strong>
                    </div>
                </div>
                <div class="card-body">

                    <img class="img-fluid d-block mx-auto" src="Nurse1.jpg" alt="" style="height: 350px">
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="row">
                <div class="col-lg-5">
                    <img class="mx-auto" width="100%" src="child.jpg" alt="">
                </div>
                <div class="card-body" style="padding-left: 10%">
                    <h1>Follow Us</h1>


                    <p><a href="#" title="Facebook"> Facebook </a></p>
                    <p><a href="#" title="Instagram"> Instagram </a></p>
                    <p><a href="#" title="Twitter"> Twitter </a></p>



                </div>
            </div>
        </div>
    </div>

    <br>


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
