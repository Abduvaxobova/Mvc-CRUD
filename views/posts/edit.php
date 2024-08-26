<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/posts/update?id=<?php echo $post['id']; ?>" method ="post" enctype="multipart/form-data">
        <input type="text" name="title" value="<?php echo $post['title'];?>"><br><br>
        <input type="text" name="content" value="<?php echo $post['content'];?>"><br><br>
        <input type="file" name="image" value="<?php echo $post['image'];?>"><br><br>
        <input type="submit" value="Edit Post">
    </form>
</body>
</html>