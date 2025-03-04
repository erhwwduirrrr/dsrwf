<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['username'] == 'user1' && $_POST['password'] == 'password12') {
            $_SESSION['username'] = $_POST['username'];
            echo "<p>You are logged in as " . $_SESSION['username'] . "</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>