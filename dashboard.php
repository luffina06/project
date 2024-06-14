<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css.php">
</head>
<body>
    <div class="menu-bar">
        <a href="#" class="active">Dashboard</a>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a style="float: right;" href="logout.php">Logout</a>
    </div>

    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Make your Life easier, Kill yourself now!</p>
</body>
</html>
