<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SkillCrafters</title>
    <link rel="stylesheet" href="auth_style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <?php
            session_start();
            if(isset($_SESSION['error'])) {
                echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])) {
                echo '<div class="success-message">' . $_SESSION['success'] . '</div>';
                unset($_SESSION['success']);
            }
            ?>
            <form action="login_process.php" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="btn-field">
                        <button type="submit" name="login">Login</button>
                    </div>
                </div>
                <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </div>
</body>
</html> 