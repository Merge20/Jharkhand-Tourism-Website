<?php
session_start();

if (
    !isset($_SESSION['user_id']) ||
    !isset($_SESSION['user']) ||
    !isset($_SESSION['email']) ||
    !isset($_POST['comment_text']) ||
    !isset($_POST['place_id'])
) {
    header("Location: ../../../../index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$username = $_SESSION['user'];
$email = $_SESSION['email'];
$comment_text = $_POST['comment_text'];
$place_id = (int)$_POST['place_id']; // Ensure it's an integer

require_once '../../../../../database/database.php';

try {
    $stmt = $pdo->prepare("
        INSERT INTO comments (username, email, comment_text, created_on, user_id, place_id)
        VALUES (?, ?, ?, NOW(), ?, ?)
    ");
    $stmt->execute([$username, $email, $comment_text, $user_id, $place_id]);

    // Redirect back to the page (you may need to adjust this)
    header("Location: ../index.php?place_id=" . $place_id);
    exit();

} catch (PDOException $e) {
    die("Error submitting comment: " . $e->getMessage());
}
