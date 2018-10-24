<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', 'BlogController@home');
$router->get('/blog', 'BlogController@blog');
$router->get('/blog/{slug}', 'BlogController@single');
$router->get('/edit/{slug}', 'AdminController@edit');
$router->get('/insert', 'AdminController@insert');

$router->post('/insert', 'AdminController@insertpost');
$router->post('/delete/{slug}', 'AdminController@delete');

//API

$router->get('/api/single/{slug}', 'AdminController@apisingle');
$router->post('/api/edit/{slug}', 'AdminController@editpost');