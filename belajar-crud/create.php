<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>
    <form action="process-create.php" method="post">
        <input type="text" name="title" placeholder="Insert Title">
        <br>
        <textarea name="content" placeholder="Insert Content"></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>