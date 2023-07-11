<?php

require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT user_id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //set the value of param username
            $param_username = trim($_POST['username']);

            //try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong!";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check confirm password
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
    }

    // Check email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email cannot be blank";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check address
    if (empty(trim($_POST["address"]))) {
        $address_err = "Address cannot be blank";
    } else {
        $address = trim($_POST["address"]);
    }

    // Check phone
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Phone number cannot be blank";
    } else {
        $phone = trim($_POST["phone"]);
    }




    //if there is no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($email_err) && empty($address_err) && empty($phone_err)) {
        $sql = "INSERT INTO users (username, email, address, phone, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_email, $param_address, $param_phone, $param_password);

            //set these parameters
            $param_username = $username;
            $param_email = $email;
            $param_address = $address;
            $param_phone = $phone;
            $param_password = $password;

            //Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location:login.php");
            } else {
                echo "Something went wrong.. Cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}


?>




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
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="box" placeholder="Enter your username" required>
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
                <input type="text" name="address" id="address" class="box" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" name="password" id="pass" class="box" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <input type="password" name="confirm_password" id="cpass" class="box" placeholder="Confirm your password" required>
            </div>
            <input type="submit" class="btn" name="submit" value="Register Now">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </section>


</body>

</html>