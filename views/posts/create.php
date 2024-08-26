<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="/posts/create" method ="POST" enctype="multipart/form-data">
        <input type="text" name="title"><br><br>
        <input type="text" name="content"><br><br>
        <input type="file" name="image"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>