<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts  -->
    <!-- header section ends  -->
    
    <section class="form-container">

        <form action="" method="post">
            <h3>Register now</h3>
            <input type="text" name="name" class="box" placeholder="enter your username" required>
            <input type="email" name="email" class="box" placeholder="enter your email" required>
            <input type="password" name="pass" class="box" placeholder="enter your password" required>
            <input type="password" name="cpass" class="box" placeholder="confirm your password" required>
            <input type="submit" class="btn" name="submit" value="register now">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </section>


</body>

</html>