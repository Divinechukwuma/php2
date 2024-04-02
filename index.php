<?php 

// require '.htaccess';

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

 if ($uri === "/webapps/php2/") {
     require 'controller/index.php';
 } elseif($uri === '/webapps/php2/about'){
    require 'controller/about.php';
 } elseif($uri === '/webapps/php2/contact'){
    require 'controller/contact.php';
 }
