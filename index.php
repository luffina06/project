<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR</title>
    <link rel="stylesheet" type="text/css" href="css.php">
</head>
<body>
    
    <div class="loginOuter">
        <div class="login">
            <form class="loginForm" method="POST" action="">
                <h1 class="h1loginForm">LOG IN</h1>
                <label class="loginLabel">Username</label>
                <input class="logInput" type="text" name="username">
                <label class="loginLabel">Password</label>
                <input class="logInput" type="password" name="password">
                <button class="loginButton" type="submit">Submit</button>
		<a class="loginButton button-link" href="register.php">Register</a>
            </form>
        </div>
    </div>
</body>
</html>
