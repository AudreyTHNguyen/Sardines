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

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Home.html">Nurses On The Go</a>
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
                        <a class="nav-link" href="login.php">Log In</a>
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


    <!-- /.col-lg-3 -->

    <header class="py-5 bg-image-full" style="background-image: url('henry.jpg');">
        <img class="img-fluid d-block mx-auto" src="Nurse1.jpg" alt="" style="height: 350px">

    </header>

    <!-- Content section -->
    <section class="py-5">
        <div class="container">
            <h1>Welcome To Nurses On The GO!</h1>
            <p class="lead">About us </p>
            <p>Hello, here Nurses On the Go we have a great selection of nurses for your home health needs. They special in large amount of fields such as elderly care, special needs, injuries, and etc. If you find a nurse that you like or need please feel free to contact us. We will keep your loved one's safe and give you a clear mind that they are being taking care of in the best possible way!</p>
        </div>
    </section>

    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('child.jpg');">
        <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
        <div style="height: 400px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
        <div class="container">
            <h1>Follow Us</h1>
            <!--        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
            <!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>-->
            <ol>

                <ul><a href="https://www.facebook.com/braylen.lucas" title="Facebook"> Facebook </a></ul>
                <ul><a href="https://www.instagram.com/realdonaldtrump/?hl=en" title="Instagram"> Instagram </a></ul>
                <ul><a href="https://twitter.com/realDonaldTrump?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" title="Twitter"> Twitter </a></ul>


            </ol>
        </div>
    </section>


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
