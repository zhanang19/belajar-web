<?php
require 'database.php';

$title = $_POST['title'];
$content = $_POST['content'];
$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

if (mysqli_query($conn, $sql)) {
    echo 'Success to create post.';
} else {
    echo 'Failed to create post.';
}
echo '<br><a href="index.php">Back to Home</a>';
?>