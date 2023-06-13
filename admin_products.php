<?php
@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom admin css file link -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>

    <?php @include 'admin_header.php' ?>

    <section class="add-products">

        <form action="" method="post" enctype="multipart/form-data">

            <h3>add new products</h3>
            <input type="text" class="box" required placeholder="enter product 
            name" name="name">
            <input type="price" class="box" required placeholder="enter product 
            price" name="price">
            <textarea name="details" class="box" cols="30" rows="10"></textarea>
            <input type="file" accept="image/jpg, image/jpeg, image/png" required 
            class="box" name="image">
            <input type="submit" class="btn" name="add_product" value="add products">


        </form>

    </section>













    <!-- custom admin script link -->
    <script src="js/admin_script.js"></script>

</body>

</html>