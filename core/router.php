<?php

namespace core;

class Router
{
   protected $routes = [];

   public function get($uri, $controller)
   {

      $this->routes[] = [

         'uri' => $uri,
         'controller' => $controller,
         'method' => 'GET'
      ];
   }

   public function post($uri, $controller)
   {

      $this->routes[] = [

         'uri' => $uri,
         'controller' => $controller,
         'method' => 'POST'
      ];
   }

   public function delete($uri, $controller)
   {

      $this->routes[] = [

         'uri' => $uri,
         'controller' => $controller,
         'method' => 'DELETE'
      ];
   }

   public function patch($uri, $controller)
   {

      $this->routes[] = [

         'uri' => $uri,
         'controller' => $controller,
         'method' => 'PATCH'
      ];
   }

   public function put($uri, $controller)
   {

      $this->routes[] = [

         'uri' => $uri,
         'controller' => $controller,
         'method' => 'PUT'
      ];
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

   protected function abort($code = 404)
   {
      // //this is a refractor of the original code its an array of the uri then it checked the called and requireds the $uri
      //set the 404 as the default  you can change it in the function

      http_response_code($code);
      require  base_path("views/{$code}.php");
      die();
   }
}
