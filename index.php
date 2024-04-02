<?php 

// require '.htaccess';

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

 if ($uri === "/webapps/php2/") {
     require 'controller/index.php';
 } elseif($uri === ''){
    require 'controller/about.php';
 }
