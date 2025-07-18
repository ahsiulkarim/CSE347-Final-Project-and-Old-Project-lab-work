<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Dhaka Drive</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php" class="logo">Dhaka Drive</a>
            <nav>
                <a href="index.php#courses">Courses</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>
    <section class="auth-form-section">
        <div class="container">
            <form id="signup-form" class="auth-form">
                <h2 class="form-title">Create Your Account</h2>
                <div class="form-group"><label for="name">Full Name</label><input type="text" id="name" required></div>
                <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" required></div>
                <div class="form-group"><label for="mobile">Mobile Number</label><input type="tel" id="mobile" placeholder="e.g., 01712345678" required></div>
                <div class="form-group"><label for="password">Password</label><div class="password-wrapper"><input type="password" id="password" required><i class="toggle-password-icon" aria-label="Show password"></i></div></div>
                <button type="submit" class="btn">Sign Up</button>
                <p class="form-switch">Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </section>
    <script src="app.js"></script>
</body>
</html>