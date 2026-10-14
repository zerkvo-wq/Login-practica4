<?php

$router->get("/palindromo", ["uses" => "PalindromoController@index"]);
$router->post("/palindromo/verificar", ["uses" => "PalindromoController@verificar"]);
$router->get('/registro', function () {
    return view('auth.registro');
});
