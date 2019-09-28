<?php
require 'database.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM posts WHERE id = ' . $id;
$post = mysqli_query($conn, $sql);
if (mysqli_num_rows($post) > 0) {
    $post = mysqli_fetch_assoc($post);
} else {
    die('Post not found!');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <a href="javascript:history.back()">Back</a>
    <form action="process-edit.php?id=<?= $post['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <input type="text" name="title" placeholder="Insert Title" value="<?= $post['title'] ?>">
        <br>
        <textarea rows="10" style="width:400px" name="content" placeholder="Insert Content"><?= $post['content'] ?></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>