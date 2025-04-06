<?php
require_once '../../../../database/database.php'; // Adjust if needed

$place_id = isset($_GET['place_id']) ? intval($_GET['place_id']) : 0;

try {
    $stmt = $pdo->prepare("SELECT username, comment_text, created_on FROM comments WHERE place_id = ? ORDER BY created_on DESC");
    $stmt->execute([$place_id]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($comments) {
        foreach ($comments as $comment) {
            echo '<div class="comment">';
            echo '<strong>' . htmlspecialchars($comment['username']) . '</strong><br>';
            echo '<small>' . $comment['created_on'] . '</small>';
            echo '<p>' . nl2br(htmlspecialchars($comment['comment_text'])) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No comments yet.</p>';
    }
} catch (PDOException $e) {
    echo '<p>Error loading comments.</p>';
}
