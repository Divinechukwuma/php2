<?php 

// echo "hello there";

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri = 'index.php'){
    require 'controller/index.php';

}elseif($uri === 'controller/about.php'){

    require ' controller/about.php';
}
