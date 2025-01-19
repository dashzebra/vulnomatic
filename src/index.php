<?php require 'system.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnomatic</title>
</head>
<body>
    <h1>Vulnomatic</h1>
    <h2>Recent posts</h2>
    <?php foreach ($vulnomatic->listAllPosts() as $post): ?>
        <h3><?= $post->getTitle() ?></h3>
        <p><?= $post->getExcerpt() ?></p>
    <?php endforeach ?>
</body>
</html>