<?php

$conn = mysqli_connect('localhost', 'belucas', 'sardines', 'belucas');

if (!$conn){
    die("Conenction failed: ".mysqli_connect_error());
}
