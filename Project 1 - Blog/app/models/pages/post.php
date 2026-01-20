<?php

$DIR_PATH = dirname(__DIR__, 3); 

include_once($DIR_PATH . '\\app\\helpers\\url.php');
include_once($DIR_PATH . '\\app\\models\\data\\posts.php');
include_once($DIR_PATH . '\\app\\models\\data\\categories.php');

$BASE_URL = dirname($BASE_URL, 2) . '/'; // returns 2 directories above the original URL. Does not change the original file

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" a href="<?= $BASE_URL ?>/public/assets/css/styles.css">
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

  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/public/assets/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, explicabo provident, voluptatum, veniam nihil repellat eveniet quae adipisci exercitationem quos minus corrupti placeat veritatis architecto excepturi laudantium nulla tenetur cupiditate.
      Odit saepe voluptas voluptates, iusto minima dolore deleniti corporis itaque, rem facere inventore in sed cumque voluptatibus unde! Assumenda nam aspernatur eveniet id illo inventore ratione laboriosam iusto culpa provident.
      Nam blanditiis autem fugiat officiis animi, adipisci consequuntur minima. Mollitia atque iste sapiente quod pariatur necessitatibus minus voluptatem rerum eos modi enim perspiciatis provident ducimus, iure nostrum nobis eum iusto.
      Perspiciatis sed numquam animi quae assumenda nesciunt voluptatibus rem! Deserunt, quae ex, pariatur nemo eveniet ipsam delectus aperiam aut quas blanditiis repellat quibusdam debitis sequi odit nostrum? Dolores, iure quam!
      Beatae vel corrupti laborum repudiandae, placeat neque officiis odit provident reiciendis ducimus amet rem. Exercitationem similique itaque labore asperiores quasi officia aspernatur quas soluta quos. Quasi aliquam in laboriosam illum.</p>
      <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, explicabo provident, voluptatum, veniam nihil repellat eveniet quae adipisci exercitationem quos minus corrupti placeat veritatis architecto excepturi laudantium nulla tenetur cupiditate.
      Odit saepe voluptas voluptates, iusto minima dolore deleniti corporis itaque, rem facere inventore in sed cumque voluptatibus unde! Assumenda nam aspernatur eveniet id illo inventore ratione laboriosam iusto culpa provident.
      Nam blanditiis autem fugiat officiis animi, adipisci consequuntur minima. Mollitia atque iste sapiente quod pariatur necessitatibus minus voluptatem rerum eos modi enim perspiciatis provident ducimus, iure nostrum nobis eum iusto.
      Perspiciatis sed numquam animi quae assumenda nesciunt voluptatibus rem! Deserunt, quae ex, pariatur nemo eveniet ipsam delectus aperiam aut quas blanditiis repellat quibusdam debitis sequi odit nostrum? Dolores, iure quam!
      Beatae vel corrupti laborum repudiandae, placeat neque officiis odit provident reiciendis ducimus amet rem. Exercitationem similique itaque labore asperiores quasi officia aspernatur quas soluta quos. Quasi aliquam in laboriosam illum.</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>

  <!-- Footer -->
        <footer>
            <p>This is my first PHP project! &copy; 2026</p>
        </footer>
    </body>