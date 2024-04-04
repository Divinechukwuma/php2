<?php

require 'functions.php';
require 'Database.php'; 

$db = new Database();
  
$posts = $db->query("SELECT * FROM tbl_php")->fetchAll();


dd($posts);

// foreach ($posts as $post) {

//     echo "<li>" . $post['title'] . "</li>";
// }
