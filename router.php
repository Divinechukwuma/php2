<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//this is a refractor of the original code its an array of the uri then it checked the called and requireds the $uri

$routes = [
   "/webapps/php2/" => 'controller/index.php',
   "/webapps/php2/about" => 'controller/about.php',
   "/webapps/php2/contact" => 'controller/contact.php',
   "/webapps/php2/notes" => 'controller/notes.php'
];

// set the 404 as the default  you can change it in the function




   function abort($code = 404)
   {

      http_response_code($code);

      require "views/{$code}.php";

      die();
   }

   
function routeToController($uri, $routes)
{

   if (array_key_exists($uri, $routes)) {

      require $routes[$uri];
   } else {
      //if u dont input anything it will send the 404 message but u can change the default
      abort();
   }
} 


routeToController($uri, $routes,);
