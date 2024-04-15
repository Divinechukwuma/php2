<?php

use core\response;



function dd($value)
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function URLIs($value)
{

    return $_SERVER['REQUEST_URI'] === $value;
}

function abort( $code = 404){
    // //this is a refractor of the original code its an array of the uri then it checked the called and requireds the $uri
      //set the 404 as the default  you can change it in the function

      http_response_code($code);
      require  base_path("views/{$code}.php");
      die();
}

function authorize($condition, $status = response::UNAUTHORIZED)
{

    if ( ! $condition) {
        abort($status);
    }
}

 function base_path($path){

     return BASE_PATH . $path;

 }


 function view($path , $attribute = []){
    
    extract($attribute);

    require base_path("./views/" . $path);
 }

//  dd($_SERVER);
