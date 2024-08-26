<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p><?php echo $_SESSION['user'] ['name'];?></p>
    <p><?php echo $_SESSION['user'] ['email'];?></p>

    <a href="/profile/edit">Edit</a><br>
    <a href="/posts/main/create">Create your post</a>
</body>
</html>