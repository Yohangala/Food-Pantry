<?php
session_start();
include_once "database.php"; // Include your database connection file

if (isset($_SESSION["user"])) {
   header("Location: index.php");
   exit();
}

if (isset($_POST["login"])) {
    if(isset($conn)){
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql = "SELECT * FROM users WHERE email = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user["password"])) {
                $_SESSION["user"] = $user["id"];
                header("Location: user.php");
                exit();
            } else {
                $error = "Invalid email or password";
            }
        } else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "Database connection is not established";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="login.php" method="post">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Email or Username" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <?php if(isset($error)): ?>
            <div class="row error"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="row button">
                <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="registration.php">Register now</a></div>
        </form>
    </div>
</div>
</body>
</html> 
