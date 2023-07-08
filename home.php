<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery Management System</title>
    font awesome cdn link
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    custom css file link
    <link rel="stylesheet" href="css/style.css">

    custom js file link
    <script src="js/script.js"></script>
</head>

<body>
    <!-- header section starts -->
    <?php
    include 'header.php';
    ?>
    <!-- header section ends -->


    <!-- Main Content Section starts -->
    <section class="banner">
        
        <div class="banner-content">
            <h1>Welcome to our Plant Nursery!</h1>
            <p>Find a wide variety of beautiful plants for your garden</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>
    </section>



    <section class="home-contact">

        <div class="content">
            <h3>have any questions?</h3>

            <a href="contact.php" class="btn">contact us</a>
        </div>

    </section>
    <!-- Main Content Section starts -->


    <!-- Footer Section -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer Section ends-->



</body>

</html>