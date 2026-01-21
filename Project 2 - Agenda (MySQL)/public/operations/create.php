<?php

  $DIR_PATH = dirname(__DIR__, 1) . "\\";

  
  include_once($DIR_PATH . "header.php");


?>

<div class="container">
    <?php include_once($DIR_PATH . "public\\backbttn.html"); ?>
    <h1 id="main-title">Create Contact</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="name">Contact's name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
        <label for="phone">Contact's phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?php
  include_once($DIR_PATH . "public\\footer.php");
?>