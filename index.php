<?php

require 'functions.php';
require 'Database.php'; 

//this is saying create a variable called $config and require whatever is returned in the config.php file

 $config =  require 'config.php';

$db = new Database($config['database']);

// $id = $_GET['id'];

$query = "SELECT * FROM users WHERE id  = ?";
  
$posts = $db->query($query, ['id'])->fetch();

dd($query);




dd($posts);

// foreach ($posts as $post) {

//     echo "<li>" . $post['title'] . "</li>";
// }
