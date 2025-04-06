<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once "./database/database.php";

        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && $password === $user["password"]) {
            // Login successful
            $_SESSION["user"] = $user["username"];
            $_SESSION["user_id"] = $user["id"]; // ← ADD THIS LINE
            $_SESSION["email"] = $user["email"];

            header("Location: ./home/index.php");
            exit();
        } else {
            // Invalid credentials
            $_SESSION["error"] = "Invalid email or password.";
            header("Location: index.php");
            exit();
        }

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
