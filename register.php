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
    <?php
    include 'header.php';
    ?>
    <!-- header section ends  -->
    
    <section class="form-container">


        <form action="" method="post">
            <h3>Register now</h3>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" class="box" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="box" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="box" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="mobile">Address</label>
                <input type="tel" name="mobile" id="mobile" class="box" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" class="box" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <input type="password" name="cpass" id="cpass" class="box" placeholder="Confirm your password" required>
            </div>
            <input type="submit" class="btn" name="submit" value="Register Now">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </section>


</body>

</html>