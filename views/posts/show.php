<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Show</title>
</head>
<body>
    <h1>Post Show</h1>
    <h3><?php echo $post['title'];?></h3>
    <h3><?php echo $post['content'];?></h3>
    <h3><?php echo $post['author_name'];?></h3>
    <img src="<?php echo '/' . $post['image'];?>" alt="Photo" height="100" width ="100">
    <h3><?php echo $post['created_at'];?></h3>
    <h3><?php echo $post['updated_at'];?></h3>
    <a href="/posts/edit?id=<?php echo $post['id']; ?>">Edit</a>
    <a href="/posts/delete?id=<?php echo $post['id']; ?>">Delete</a>
</body>
</html>