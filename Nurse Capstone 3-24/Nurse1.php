<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
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

<body style="display: flex;
  min-height: 100vh;
  flex-direction: column;">

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
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Nurses
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

    <div class="container d-flex h-100" style="flex: 1">
        <div class="align-self-center">
            <br>
            <div class="card h-100">
                <img class="mx-auto" width="50%" src="Nurse1.jpg" alt="Jamie Curtis">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Jamie Curtis</a>
                    </h4>
                    <h5>Wayne State University</h5>
                    <p class="card-text">Jamie Curtis has over 6 years of experience in the nursing field in areas such as pediatrics, med-surgical medicine, and family medicine. Jamie was a Pediatric Nurse at Beaumont Hospital before transferring to Home Health nursing then school nursing. She also is a family nurse practitioner. In addition, she has worked with individuals with catastrophic injuries such as spinal cord and severe head injuries.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
            <br>
            <form action="action_page.php">
                <label for="fname">First Name</label>
                
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
               
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
               
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

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
