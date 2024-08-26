<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <?php foreach ($posts as $post): ?>
        <h2><?php echo $post['title']; ?> </h2> 
        <h2 style ="font-weight: normal;"><?php echo $post['content']; ?></h2> 
        <a href="/posts/show?id=<?php echo $post['id']; ?>">View Post</a><br>
        <a href="/posts/edit?id=<?php echo $post['id']; ?>">Edit</a><br>
        <a href="/posts/delete?id=<?php echo $post['id']; ?>">Delete</a>
    <?php endforeach; ?>
    </body>
</html>