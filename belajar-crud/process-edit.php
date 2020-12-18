<?php
require 'database.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo 'Success to update post.';
} else {
    echo 'Failed to update post.';
}
echo '<br><a href="index.php">Back to Home</a>';
?>