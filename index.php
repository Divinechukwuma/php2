<?php

require 'functions.php';
require 'Database.php'; 

$db = new database();
  
$posts = $db->query("SELECT * FROM tbl_php")->fetchAll(PDO::FETCH_ASSOC);


dd($posts);

// foreach ($posts as $post) {

//     echo "<li>" . $post['title'] . "</li>";
// }
