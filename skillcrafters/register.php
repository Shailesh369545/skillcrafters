<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SkillCrafters</title>
    <link rel="stylesheet" href="auth_style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Register</h2>
            <?php
            session_start();
            if(isset($_SESSION['error'])) {
                echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>
            <form action="register_process.php" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div class="btn-field">
                        <button type="submit" name="register">Register</button>
                    </div>
                </div>
                <p class="login-link">Already have an account? <a href="index.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html> 