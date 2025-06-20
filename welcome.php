<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="welcome-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
        <p>You have successfully logged in.</p>
        <a href="logout.php"><button>Logout</button> </a>
    </div>
    
</body>
</html>