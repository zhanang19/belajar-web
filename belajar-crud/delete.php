<?php
require 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM posts WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo 'Success to delete post.';
} else {
    echo 'Failed to delete post.';
}
echo '<br><a href="index.php">Back to Home</a>';
?>