<?php

    $DIR_PATH = dirname(__DIR__, 1) . "\\";

    include_once($DIR_PATH . "config\\url.php");
    include_once($DIR_PATH . "config\\process.php");

    // Clears message
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }

    // Files like 'create.php' are in a directory below "header.php" (this one), so to be sure the $BASE_URL works as intended I made this, it goes up 1 directory
    if (basename($BASE_URL) == "public") {
        $BASE_URL = dirname($BASE_URL, 1) . "/";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Agenda</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjH;qVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>public/assets/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>public/index.php">
                <img src="<?= $BASE_URL ?>public/assets/logo.svg" alt="Agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>public/index.php">Agenda</a>
                    <a class="nav-link active" href="<?= $BASE_URL ?>public/operations/create.php">Add Contact</a>
                </div>
            </div>
            </nav>
    </header>