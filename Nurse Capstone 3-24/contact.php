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
                        <a class="nav-link" href="menu.php">Nurses</a>
                    </li>
                    <li class="nav-item">
                        <?php  if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Log In</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact
                            <span class="sr-only">(current)</span>
                        </a>
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


    <!--
    <form action="mail_handler.php" method="post">
        <fieldset>
        First Name: <input type="text" name="first_name" size="20"><br>
        Last Name: <input type="text" name="last_name" size="20"><br>
        Email: <input type="text" name="email"><br>
        Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
-->
    <!--    <h4>Please fill out the following areas:</h4>-->
    <div class="container" style="height: 80vh">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Contact</h1>
                <form action="mail_handler.php" method="post">
                    <fieldset>
                        <div><label for="first_name">First Name</label></div>
                        <input type="text" name="first_name" placeholder="Your name..">

                        <div><label for="last_name">Last Name</label></div>
                        <input type="text" name="last_name" placeholder="Your last name..">

                        <div><label for="email">Email</label></div>
                        <input type="text" name="email" placeholder="Your email..">
                        <div><label for="message">Questions? </label></div>
                        <textarea name="message" cols="40" rows="5" placeholder="Your text.."></textarea>


                        <div><input type="submit" name="submit" value="Submit"></div>
                    </fieldset>
                </form>
            </div>
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
