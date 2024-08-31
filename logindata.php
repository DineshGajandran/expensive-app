<?php

session_start();
include_once("database.php");


$name1 = $_POST['name1'];
$email1 = $_POST['email1'];
$pass1 = $_POST['pass1'];
$phone1 = $_POST['phone1'];
// $files1 = $_POST['files1'];

$sql = "INSERT into login_user (id,name,email,password,phone) VALUES (null,'$name1','$email1','$pass1','$phone1')";
var_dump($sql);
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Form Submitted Successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();




?>