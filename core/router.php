<?php

namespace core;

class Router
{
   protected $routes = [];

   public function add($method, $uri, $controller)
   {

      $this->routes[] = [

         "uri" => $uri,
         "controller" => $controller,
         "method" => $method,
      ];
   }

   public function get($uri, $controller)
   {

      $this->add("GET", $uri, $controller);
   }

   public function post($uri, $controller)
   {

      $this->add("POST", $uri, $controller);
   }

   public function delete($uri, $controller)
   {

      $this->add("DELETE", $uri, $controller);
   }

   public function patch($uri, $controller)
   {

      $this->add("PATCH", $uri, $controller); 
   }

   public function put($uri, $controller)
   {

      $this->add("PUT", $uri, $controller);
   }

   public function route($uri, $method)
   {

      foreach ($this->routes  as $route) {
 
         if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
            return  require base_path($route['controller']);
         }
      }

      // Call abort

      $this->abort();
   }

   function abort($code = 404)
   {
      // //this is a refractor of the original code its an array of the uri then it checked the called and requireds the $uri
      //set the 404 as the default  you can change it in the function

      http_response_code($code);
      require  base_path("views/{$code}.php");
      die();
   }
}
