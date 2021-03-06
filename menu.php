<?php 
  include('server.php');
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

    $sql = 'SELECT * FROM profile';
    $location = "oakland";
    $specialty= "string";
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
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Nurses
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insuarance.php">Services

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

            <div class="col-lg-3">

                <br>
                <h1>Filter By</h1>
                <form action="#" method="post">
                    <h3>Location</h3>
                    <select id="location" name="location">
                        <option value="oakland' OR `location` = 'macomb' OR `location` = 'wayne' OR `location` = 'lapeer">ALL</option>
                        <option value='oakland'>Oakland</option>
                        <option value='wayne'>Wayne</option>
                        <option value='macomb'>Macomb</option>
                        <option value='lapeer'>Lapeer</option>
                    </select>
                    <h3>Nurse Type</h3>
                    <select id="specialty" name="specialty">
                        <option value="Specialty in elderly care' OR `specialty` = 'Specialty in special needs care' OR `specialty` = 'Specialty in pediatrics care' OR `specialty` = 'Specialty in oncology patients' OR `specialty` = 'Specialty in dementia care' OR `specialty` = 'Bilingual in Spanish">ALL</option>
                        <option value='Specialty in elderly care'>Elderly Care</option>
                        <option value='Specialty in special needs care'>Special Needs Care</option>
                        <option value='Specialty in pediatrics care'>Pediatrics Care</option>
                        <option value='Specialty in oncology patients'>Oncology Care</option>
                        <option value='Specialty in dementia care'>Dementia Care</option>
                        <option value='Bilingual in Spanish'>Speaks Spanish</option>
                    </select>
                    <h3>Experience</h3>
                    <select id="experience" name="experience">
                        <option value='ASC'>Sort Experience from Low to High</option>
                        <option value='DESC'>Sort Experience from High to Low</option>
                    </select>
                    <input type="submit" name="submit" value="Get Selected Values" />
                </form>
                <?php 
                if(isset($_POST['submit'])){
                
                $location = $_POST['location'];
                $specialty = $_POST['specialty'];
                
                if ($_POST['experience']=='ASC' ) { $sql="SELECT * FROM `profile` WHERE `location` = '$location' AND `specialty` = '$specialty' ORDER BY `profile`.`experience` ASC  " ; }
                if ($_POST['experience']=='DESC' ) { $sql="SELECT * FROM `profile` WHERE `location` = '$location' AND `specialty` = '$specialty' ORDER BY  `profile`.`experience` DESC" ;}}
                ?>

            </div>



            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="n13.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="n8.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="n11.jpg" alt="Third slide">
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
                <br>

                <div class="row">

                    <?php
                    listProfile($sql);
                        ?>

                    <!-- <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="Nurse2.php"><img class="card-img-top" src="Nurse2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="Nurse2.php">Taylor Sanchez</a>
                                </h4>
                                <h5>Oakland University</h5>
                                <p class="card-text">Specialty in special needs care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="Nurse1.php"><img class="card-img-top" src="Nurse1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="Nurse1.php">Jamie Curtis</a>
                                </h4>
                                <h5>Wayne State University</h5>
                                <p class="card-text">Specialty in elderly care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="Nurse3.php"><img class="card-img-top" src="Nurse3.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="Nurse3.php">Alfred James</a>
                                </h4>
                                <h5>Oakland University</h5>
                                <p class="card-text">Specialty in pediatrics care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n1.php"><img class="card-img-top" src="n1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n1.php">Cathy Smith</a>
                                </h4>
                                <h5>Wayne State University</h5>
                                <p class="card-text">Specialty in dementia care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n2.php"><img class="card-img-top" src="n2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n2.php">Yasmin Hodges</a>
                                </h4>
                                <h5>Oakland University</h5>
                                <p class="card-text">Well rounded patient care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n4.php"><img class="card-img-top" src="n4.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n4.php">Darlene Castro</a>
                                </h4>
                                <h5>Wayne State University</h5>
                                <p class="card-text">Trilingual in Spanish and sign language</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n5.php"><img class="card-img-top" src="n5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n5.php">Aisha Wallace</a>
                                </h4>
                                <h5>University of Michigan</h5>
                                <p class="card-text">Specialty in oncology patients</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n6.php"><img class="card-img-top" src="n6.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n6.php">Lyla Watkins</a>
                                </h4>
                                <h5>Michigan State University</h5>
                                <p class="card-text">Specialty in elderly care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n7.php"><img class="card-img-top" src="n7.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n7.php">Keri Gates</a>
                                </h4>
                                <h5>Michigan State University</h5>
                                <p class="card-text">Bilingual in spanish</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n8.php"><img class="card-img-top" src="n8.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n8.php">Elliot Russo</a>
                                </h4>
                                <h5>Michigan State University</h5>
                                <p class="card-text">Specialty in special needs care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n9.php"><img class="card-img-top" src="n9.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n9.php">Kerry Randolph</a>
                                </h4>
                                <h5>Oakland University</h5>
                                <p class="card-text">Specialty in elderly care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="n10.php"><img class="card-img-top" src="n10.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="n10.php">Jordan Johnston</a>
                                </h4>
                                <h5>Oakland University</h5>
                                <p class="card-text">Specialty in autism care</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                            </div>
                        </div>
                    </div> -->

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
