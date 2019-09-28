<?php
require 'database.php';

$sql = 'SELECT id, title FROM posts';
$posts = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
</head>
<body>
    <h2>All Post</h2>
    <a href="create.php">Create Post</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($posts) > 0) :
            while ($post = mysqli_fetch_assoc($posts)) :
        ?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $post['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $post['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
            endwhile;
        else:
        ?>
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>