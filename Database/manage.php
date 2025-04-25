<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first"];
    $last_name = $_POST["last"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once "database.php";

        $checkQuery = "SELECT COUNT(*) FROM users WHERE username = ? OR email = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$username, $email]);

        if ($checkStmt->fetchColumn() > 0) {
            $_SESSION['error'] = "Username or Email already exists.";
            header("Location: ../signup/index.php");
            exit;
        }

        $query = "INSERT INTO users (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$first_name, $last_name, $username, $email, $password]);

        $stmt = null;
        $pdo = null;

        unset($_SESSION['error']);

        $_SESSION['success'] = "Account created successfully!";
        header("Location: ../signup/index.php");
    
        exit;

    } catch (PDOException $error) {
        $_SESSION['error'] = "Something went wrong. Please try again later.";
        header("Location: ../signup/index.php");
        exit;
    }

} else {
    header("Location: ../signup/index.php");
    exit;
}
