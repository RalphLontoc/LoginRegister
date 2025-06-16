<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!-- SIGN UP CARD -->
<section class="card create-account" aria-label="Create account form" hidden>
      <div class="card-content">
        <h1>Create account</h1>
        <p class="subtitle">
          Already have an account? <a href="index.php" class="link" id="link-signin">Sign in</a>
        </p>
        <form id="signup-form" novalidate action="register.php" method="POST">
          <div class="input-group" style="position: relative;">
            <input
              type="text"
              id="signup-name"
              name="full"
              placeholder="Full Name"
              aria-describedby="signup-name"
              autocomplete="name"
              required
            />
          </div>
          <div class="input-group" style="position: relative;">
            <input
              type="text"
              id="signup-email-phone"
              name="email"
              placeholder="Email"
              aria-describedby="signup-email-phone"
              autocomplete="email"
              required
            />
          </div>
          <div class="input-group" style="position: relative;">
            <input
              type="password"
              id="signup-password"
              name="password"
              placeholder="Password"
              aria-describedby="signup-password"
              required
            />
          </div>
          <button type="submit" class="submit-btn" aria-label="Sign up">
            Sign up 
          </button>
        </form>
      </div>
    </section> 
     <script src="script.js"></script>  
</body>
</html>