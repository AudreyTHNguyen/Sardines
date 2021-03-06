<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database

$db = mysqli_connect('localhost', 'username', 'password', 'dbname');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = mysqli_real_escape_string($db, $_POST['type']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, type) 
  			  VALUES('$username', '$email', '$password', '$type')";
  	mysqli_query($db, $query);      
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    
    /*if ($type === 'nurse') {
    header('location: n10.php');
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $query);
    $row=mysql_fetch_array($result);
    $uid = $row[0];
    $query = "INSERT INTO profile (uid, url, name, rating) 
              VALUES($uid, '$username.php', '$username', 5)";
    mysqli_query($db, $query);
    }*/
    
  	header('location: Home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


//SUBMIT COMMENT
if (isset($_POST['commentSubmit'])){
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    $date = mysqli_real_escape_string($db, date('Y-m-d H:i:s'));
    $message = mysqli_real_escape_string($db, $_POST['message']);
    $pageID = mysqli_real_escape_string($db, $_POST['pageID']);
    
    if (empty($message)) { array_push($errors, "Message is required"); }
        
    if (count($errors) == 0) {
    $query = "INSERT INTO comments (uid, DATE, message, pageID) VALUES('$username', '$date', '$message', '$pageID')";
        
    mysqli_query($db, $query);
    header("location: $pageID");
    }
}

//LIST COMMENTS
function listComments($postID) {
    global $db;    
    
    $sql = "SELECT * FROM comments WHERE pageID = '$postID'";
    $results = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($results)){
        echo "<div style='outline: 1px solid lightgray;'><p style='padding: 2%;'>";
        echo $row['uid']; 
        echo " ";
        echo $row['DATE']; 
        echo " <br>";
        echo $row['message'];
        echo "</p></div>";
    }
}

//LIST PROFILES
function listProfile($sql) {
    global $db;
    
    $results = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($results)){
            echo "<div class='col-lg-4 col-md-6 mb-4'>";
            echo "<div class='card h-100'>";
                            echo "<a href='";
                            echo $row['url'];
                            echo "'>";
                            echo "<img class='card-img-top' src='";
                            echo $row['image'];
                            echo "' alt=''> </a>";
                            echo "<div class='card-body'> <h4 class='card-title'> <a href='";
                            echo $row['url'];
                            echo "'>";
                            echo $row['name'];
                            echo "</a></h4><h5>";
                            echo $row['university'];
                            echo "</h5>";
                            echo "<p class='card-text'>";
                            echo $row['specialty'];
                            echo "</p></div>";
                            echo "<div class='card-footer'><small class='text-muted'>";
                            $star = $row['rating'];    
                            while ($star > 0){
                                echo "&#9733;";
                                $star = $star - 1;
                                }
                                echo "</small>";
                echo"</div>";
            echo "</div>";
        echo "</div>";
    }
}

?>
