<?php
require 'connection.php';

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id=$_GET['id'];
$status=$_GET['status'];

$updateQuery="UPDATE testimonials SET status=$status WHERe id=$id";

mysqli_query($con,$updateQuery);
header('Location: testimonials.php');

?>