<?php
require 'connection.php';

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id=$_GET['id'];
$status=$_GET['status'];

$updateQuery="UPDATE franchise  SET status=$status WHERE t_id=$id";

mysqli_query($con,$updateQuery);
header('Location: viewfranchise.php');

?>