<?php
// This script will handle login
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: home.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$email_err = $password_err = "";

// If the request method is POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
        $email_err = "Please enter your email";
        $password_err = "Please enter your password";
    } else {
        $username = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

    if (empty($email_err) && empty($password_err)) {
        $sql = "SELECT user_id, username, password FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_username);
        $param_username = $username;

        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // This means the password is correct. Allow the user to log in
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        // Redirect user to home page
                        header("location: home.php");
                        exit();
                    } else {
                        $password_err = "Invalid password";
                    }
                }
            } else {
                $email_err = "Email or username not found";
            }
        }
    }
}
?>

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

        <form action="login.php" method="post">
            <h3>Login now</h3>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="email" class="box" placeholder="Enter your email or username" required>
                <span class="error"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" class="box" placeholder="Enter your password" required>
                <span class="error"><?php echo $password_err; ?></span>
            </div>
            <input type="submit" class="btn" name="submit" value="Login">
            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </section>
</body>

</html>
