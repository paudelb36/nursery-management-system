<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
     <!-- header section starts  -->
     <?php
    include 'header.php';
    ?>
    <!-- header section ends  -->

    <section class="form-container">

        <form action="register.php" method="post">
            <h3>Login now</h3>
            
            <input type="email" name="email" class="box" placeholder="enter your email" required>
            <input type="password" name="pass" class="box" placeholder="enter your password" required>
            <input type="submit" class="btn" name="submit" value="login">
            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </section>
</body>

</html>