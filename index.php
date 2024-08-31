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
    <title></title>
  
        <?php include 'header.php';?>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php';?>


        <!-- Page Content  -->
        <div id="content">

            <div class="container-one">
             
              <?php include 'headermenu.php';?>
            

            <div class="line"></div>
               <div class="container">
                <div class="row">
                    <div class="dflex">

                    </div>

                </div>

               </div>
            
            </div>
    </div>
</body>
</html>