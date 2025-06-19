<?php 
include("connect.php");

    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Database connection
$conn = new mysqli('localhost', 'root', '', 'login'); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    //check if email is exist
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); 
    
        if($result->num_rows >  0){  
            echo "<script>alert('Email already exist. Please try again.');
            window.location.href = 'index.php'; </script>";
        }else{

        // Use prepared statement
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullname, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');
            window.location.href = 'index.php'; </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
        }
        // hello world

?>