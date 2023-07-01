<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
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
    <?php 
    include 'header.php';
    ?>
    
    <!-- Main Content Section -->
    <section class="main-content">
        <div class="landing-page">
            <h1>Welcome to the Nursery Management System!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum ante vel urna ullamcorper, at blandit mi fermentum. Sed maximus, justo a tempus fringilla, metus ex commodo sem, vitae tristique urna massa eu purus.</p>
        </div>

        <div class="product-list">
            <h2>Our Products</h2>
            <div class="product">
                <img src="images/product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum ante vel urna ullamcorper, at blandit mi fermentum.</p>
                <a href="product-details.php?id=1">View Details</a>
            </div>

            <div class="product">
                <img src="images/product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum ante vel urna ullamcorper, at blandit mi fermentum.</p>
                <a href="product-details.php?id=2">View Details</a>
            </div>

            <!-- Add more product items as needed -->
        </div>
    </section>

    <!-- Footer Section -->
    <?php 
    include 'footer.php';
    ?>


    

</body>
</html> 

