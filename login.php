<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $conn = new mysqli('localhost', 'root', '', 'login'); // Change DB name

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // This is the critical check:
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
            exit();
        } else {
            echo 
            "<script>alert('Invalid password.');
            window.location.href = 'index.php'; </script>";
        }
    } else {
        echo 
           "<script>alert('No user found with that email.');
            window.location.href = 'index.php'; </script>";
    }

    $stmt->close();
    $conn->close();
}
?>