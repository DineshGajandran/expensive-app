<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "budget_portal";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $databasename);

// Check connection
// if (!$conn) {
//     die("Unable to Connect database: " . mysqli_connect_error());
// }else{
//     echo 'connect the database';
// }
?>