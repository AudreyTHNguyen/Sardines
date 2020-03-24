<?php include('server.php') ?>
<!DOCTYPE html>
<html>

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
                        <a class="nav-link" href="Home.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Nurses</a>
                    </li>
                    <li class="nav-item active">
                        <?php  if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Log In
                        <?php endif ?><span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <?php  if (isset($_SESSION['username'])) : ?>
                            Welcome <strong>
                                <?php echo $_SESSION['username']; ?></strong></a>

                    </li>
                    <li>
                        <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="height: 80vh">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">
                    <h2>Register</h2>
                </h1>

                <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <label>Username</label>
                        <div class="input-group">
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="email" name="email" value="<?php echo $email; ?>"></div>
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <div class="input-group">
                            <input type="password" name="password_1">
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Confirm password</label>
                        <div class="input-group">
                            <input type="password" name="password_2">
                        </div>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn" name="reg_user" style="color: dodgerblue">Register</button>
                    </div>
                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
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
