<?php

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?', 2) . '/';

 
// Will use this so I don't have to write the whole URL everytime I have to use the root URL

// $_SERVER['SERVER_NAME'] returns 'localhost'
// dirname returns the project
// '?' and '/' grants that it will ignore any parameter 

// This method is really common in PHP projects

?>