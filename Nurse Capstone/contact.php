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
    <link rel="stylesheet" type="text/css" href="menu.css">



    <title>Nurses On The Go!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">
    <link href="border.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Home.html">Nurses On The Go!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home

                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="menu.php">Nurses
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Log In</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <?php  if (isset($_SESSION['username'])) : ?>
                        <p>Welcome <strong>
                                <?php echo $_SESSION['username']; ?></strong></p>
                        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
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


    <form action="mail_handler.php" method="post">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" placeholder="Your name..">

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" placeholder="Your last name..">

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your email..">
            <label for="message">Questions? </label>
            <input type="text" name="message" placeholder="Your text..">


            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>



</body>

</html>
