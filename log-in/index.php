<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Log In</title>
</head>
<body class="loginPage">

    <div class="main" id="signInForm">
        <form method="post" action="login_process.php">
            <div class="header">
                <i class="bx bx-user-circle"></i>
            </div>

            <h1>Login</h1>
            
            <div class="input">
                <input type="text" name="email" id="email" placeholder="Email or Username" required>
                <i class="bx bx-user"></i>
            </div>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email'): ?>
                <div class="field-error">
                    <i class="bx bx-error-circle"></i> Incorrect Email or Username!
                </div>
            <?php endif; ?>

            <div class="input">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="bx bx-lock"></i>
            </div>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'password'): ?>
                <div class="field-error">
                    <i class="bx bx-error-circle"></i> Incorrect Password!
                </div>
            <?php endif; ?>

            <div class="checkList">
                <label><input type="checkbox">Remember me</label>
                <a href="#" class="btnn">Forgot Password?</a>
            </div>

            <button type="submit" class="btn" name="signIn">Login</button>

            <div class="register">
                <p>Don't have an account? <a href="#" id="goToSignUp">Create Account</a></p>
            </div>
        </form>
    </div>

    <div class="main" id="signUpForm" style="display: none;">
        <form method="post" action="register_process.php">
            <div class="header">
                <i class="bx bx-user-plus"></i>
            </div>

            <h1>Register</h1>
            
            <div class="input">
                <input type="text" name="username" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>

            <div class="input">
                <input type="email" name="email" placeholder="Email Address" required>
                <i class="bx bx-envelope"></i>
            </div>

            <div class="input">
                <input type="password" name="password" placeholder="Password" required>
                <i class="bx bx-lock"></i>
            </div>

            <button type="submit" class="btn" name="signUp">Create Account</button>

            <div class="register">
                <p>Already have an account? <a href="#" id="goToSignIn">Login Here</a></p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>

</body>
</html>
