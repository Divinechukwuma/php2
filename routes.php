<?php

$router->get("/webapps/php2/public/", "/index.php");
$router->get("/webapps/php2/about", "/about.php");
$router->get("/webapps/php2/contact", "/contact.php");


$router->get("/webapps/php2/notes", "/notes/index.php")->only('auth');


$router->get("/webapps/php2/note", "/notes/show.php");
$router->delete("/webapps/php2/note", "/notes/destroy.php");

$router->get("/webapps/php2/note/edit", "/notes/edit.php");
$router->patch("/webapps/php2/note", "/notes/update.php");


$router->get("/webapps/php2/create", "/notes/create.php");
$router->post("/webapps/php2/notes", "/notes/store.php");

$router->get("/webapps/php2/register", "/Registration/create.php")->only('guest');
$router->post("/webapps/php2/register", "/Registration/store.php")->only('guest');

$router->get("/webapps/php2/login", "/sessions/create.php")->only('guest');
$router->post("/webapps/php2/login", "/sessions/store.php")->only('guest');
$router->delete("/webapps/php2/logout", "/sessions/destroy.php")->only('auth');