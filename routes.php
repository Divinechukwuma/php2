<?php

$router->get("/webapps/php2/public/", "controller/index.php");
$router->get("/webapps/php2/about", "controller/about.php");
$router->get("/webapps/php2/contact", "controller/contact.php");


$router->get("/webapps/php2/notes", "controller/notes/index.php");


$router->get("/webapps/php2/note", "controller/notes/show.php");
$router->delete("/webapps/php2/note", "controller/notes/destroy.php");


$router->get("/webapps/php2/create", "controller/notes/create.php");
 $router->post("/webapps/php2/notes", "controller/notes/store.php");

//dd($_SERVER); 