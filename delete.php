<?php

include 'connection.php';

$alcode = $_GET['alcode'];

$q = " DELETE FROM `goprac` WHERE alcode = '$alcode' ";

mysqli_query($con,$q);

header('location:index.php');

?>