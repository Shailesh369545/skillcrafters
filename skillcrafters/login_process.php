<?php
session_start();
require_once 'config.php';

if(isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: home.html");
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password";
            header("Location: index.php");
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Error occurred during login";
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?> 