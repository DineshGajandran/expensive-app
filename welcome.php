<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <?php
    session_start();
    $email = $_SESSION['email'];

    // Validate session
    if (empty($email)) {
        header('Location: index.php');
        exit();
    } else {
        // Assuming $username is stored in session or fetched from database
        $username = $email; // Replace this with actual username retrieval logic if needed
    ?>
        <h1>Welcome Page</h1>
        <h3>Hello: <?php echo htmlspecialchars($username); ?></h3>
        <a href="logout.php">Logout</a>
    <?php } ?>
</body>
</html>
