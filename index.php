<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Login & Signup</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<!-- This is an update -->
 <h1>Hello</h1>
 <!-- Hanggang dito -->
  <main>
    <section class="card login" aria-label="Login form">
      <div class="card-content">
        <h1>Login</h1>
        <p class="subtitle">
          Don't have an account? <a href="signup.php" class="link" id="link-signup">Sign up</a>
        </p>
        <form id="login-form" novalidate action="connect.php">
          <div class="input-group">
            <span class="material-icons" aria-hidden="true">person</span>
            <input
              type="text"
              id="login-username"
              name="username"
              placeholder="Username"
              required
              aria-describedby="login-password"
            />

          </div>
          <div class="input-group">
            <span class="material-icons" aria-hidden="true">lock</span>
            <input
              type="password"
              id="login-password"
              name="password"
              placeholder="Password"
              required
              aria-describedby="login-password"
            />
          </div>
          <button type="submit" class="submit-btn" aria-label="Login">
            Login 
          </button>
        </form>
    

      </div>
    </section>

    
  </main>
   <script src="script.js"></script>
</body>
</html>

