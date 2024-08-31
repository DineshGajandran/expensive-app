<?php
session_start();
$email = $_SESSION['email'];

// Validate session
if (empty($email)) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>database</title>

    <?php include 'header.php'; ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php'; ?>


        <!-- Page Content  -->
        <div id="content">

            <div class="container-one">

                <?php include 'headermenu.php'; ?>


                <div class="line"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">

                                <form>
                                    <div class="p-2 bd-highlight">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </div>

                                    <div class="p-2 bd-highlight">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </div>


                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</body>

</html>