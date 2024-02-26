<?php

function dd($value){
echo "<pre>", var_dump($value), "</pre>";
die();
}

function base_path($path = ''){
    return __DIR__ . '/../' . $path;
}

function view($path, $attributes = []){
    extract($attributes);// extrae los atributos del array y los incluye en la vista como variables
    return require base_path("views/{$path}");
}
