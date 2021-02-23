<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Con controller
Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('admin', 'PageController@admin')->name('admin');

Route::get('posts_api', 'PageController@posts_api')->name('posts_api');


// resource route/contoller
Route::resource('posts', 'PostController');


// Senza controller

/* Route::get('/', function () {
    $title = "Blog";
    $posts = [
        [
            "title"=> 'My first post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, cum adipisci omnis laborum inventore expedita. Tenetur hic aut ratione."
        ],
        [
            "title"=> 'My second post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, cum adipisci omnis laborum inventore expedita. Tenetur hic aut ratione."
        ],
        [
            "title"=> 'My third post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, cum adipisci omnis laborum inventore expedita. Tenetur hic aut ratione."
        ]
    ];
    return view('welcome', compact('title', 'posts'));
})->name('home'); */

/* Route::get('about-us', function () {
    return view('about', ['name' => "Tailor"]);
})->name('about'); */

/* Route::get('admin', function () {
    return view('admin', ['name' => "Fabio"]);
})->name('admin'); */
