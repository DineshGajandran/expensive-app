<?php
include_once("database.php");
// Get POST data
$emailAddress = $_POST['email_l'];
$password = $_POST['pass_l'];

// Escape user inputs for security
$emailAddress = $conn->real_escape_string($emailAddress);
$password = $conn->real_escape_string($password);

// Prepare the response message
$response_message = '';

if (!empty($emailAddress) && !empty($password)) {
    $query = "SELECT * FROM login_user WHERE email = '$emailAddress' AND password = '$password'";
    $result = $conn->query($query);
   
    if ($result->num_rows > 0) {
        // print_r( $query);
        session_start();
        $_SESSION['email'] = $emailAddress;
        $response_message = 'success:Login successful';
    } else {
        $response_message = 'error:Wrong email or password';
    }
} else {
    $response_message = 'error:All fields are required';
}

// Close connection
$conn->close();

// Output plain text response
echo $response_message;
?>
