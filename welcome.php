<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Hello <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <button onclick="deleteSession()">Logout</button>
    <script>
        function deleteSession() {
            sessionStorage.clear(); // This is just for demonstration, not related to PHP session
            window.location.href = 'login.php?logout';
        }
    </script>
    <?php
    function deleteSession() {
        session_destroy();
    }

    if (isset($_GET['logout'])) {
        deleteSession();
    }
    ?>
</body>
</html>