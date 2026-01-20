<?php

$DIR_PATH= dirname(__DIR__); 

include_once($DIR_PATH . '\\app\\helpers\\url.php');
include_once($DIR_PATH . '\\app\\models\\data\\posts.php');
include_once($DIR_PATH . '\\app\\models\\data\\categories.php');

// 'dirname(__DIR__)' gets the name of the directory this file is in

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" a href="<?= $BASE_URL ?>public/assets/css/styles.css">
</head>
    <body>
        <!-- Header -->
        <header>  <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/public/assets/img/logo.svg" alt="Little bug">
            </a>
            <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categories</a></li>
                <li><a href="#" class="nav-link">About</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contact me</a></li>
            </ul>
            </nav>
        </header>
        <!-- Header -->

       <!-- First image and title, main part of the site -->
        <main>
            <div id="title-container">
                <h1>Blog</h1>
                <p>The best in the city!</p>
            </div>

            <!-- Mock out posts -->
            <div id="posts-container">
                <?php foreach($posts as $post): ?>
                    <div class="post-box">
                        <img src="<?= $BASE_URL ?>/public/assets/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                        <h2 class="post-title">
                            <a href="<?= $BASE_URL ?>app/models/pages/post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                        </h2> 
                        <p class="post-description"><?= $post['description'] ?></p>
                        <div class="tags-container">
                                <?php foreach($post['tags'] as $tag): ?>
                                <a href="#"><?= $tag ?></a>
                                <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End of mock posts -->
        </main>

        <!-- Footer -->
        <footer>
            <p>This is my first PHP project! &copy; 2026</p>
        </footer>
    </body>
</html>