<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Username already taken.";
    } else {
        $sql = "INSERT INTO tbl_users (username, password) VALUES ('$username', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful.";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css.php">
</head>
<body>
    <div class="loginOuter">
        <div class="login">
            <form class="loginForm" method="POST" action="">
                <h1 class="h1loginForm">REGISTER</h1>
                <label class="loginLabel">Username</label>
                <input class="logInput" type="text" name="username" required>
                <label class="loginLabel">Password</label>
                <input class="logInput" type="password" name="password" required>
                <label class="loginLabel">Confirm Password</label>
                <input class="logInput" type="password" name="confirm_password" required>
                <button class="loginButton" type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
