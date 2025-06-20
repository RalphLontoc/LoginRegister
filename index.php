<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login and Register</title>
</head>

<body>

<!-- SIGNUP FORM -->
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="POST" id="signup-form">
                <h1>Create Account</h1>
                <input type="text" placeholder="Name" name="fullname" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button>Sign Up</button>
            </form>
        </div>

        <!-- LOGIN FORM -->
        <div class="form-container sign-in">
            <form action="login.php" id="login-form" method="POST">
                <h1>Sign In</h1>
                <input type="email" placeholder="Email" required name="email">
                <input type="password" placeholder="Password" required name="password">
        
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Kabsuhenyo!</h1>
                    <p>Already have an account? Login now</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Kabsuhenyo!</h1>
                    <p>Doesn't have an account? Register now</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>