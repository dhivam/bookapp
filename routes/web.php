<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('books', 'BooksController@index');
$router->get('books/{id}', 'BooksController@getBookbyId');
$router->post('books', 'BooksController@BookStore');
$router->put('books/{id}', 'BooksController@BookUpdate');
$router->delete('books/{id}', 'BooksController@BookDestroy');

$router->get('/authors', 'BooksController@Authors');
$router->get('/authors/{id}', 'BooksController@AuthorsId');
$router->post('/authors', 'BooksController@AuthorsAdd');
$router->put('/authors/{id}', 'BooksController@authorsupdate');
$router->delete('/authors/{id}', 'BooksController@authorsdestroy');
