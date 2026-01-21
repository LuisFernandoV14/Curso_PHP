<?php

  $DIR_PATH = dirname(__DIR__, 1) . "\\";

  include_once($DIR_PATH . "header.php");

?>
<div class="container" id="view-contact-container"> 
    <?php include_once($DIR_PATH . "public\\backbttn.html"); ?>
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Phone:</p>
    <p><?= $contact["phone"] ?></p>
</div>
<?php
  include_once($DIR_PATH . "public\\footer.php");
?>
