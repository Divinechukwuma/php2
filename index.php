<?php 

// require '.htaccess';

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

 if ($uri === "/index.php/") {
     require 'controller/index.php';
 } 
