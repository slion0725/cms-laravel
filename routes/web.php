<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Route::get('/table', function () {
//     return view('table');
// })->name('table');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// league/glide + league/glide-laravel
Route::get('i/{path}', function (League\Glide\Server $server, $path, Illuminate\Http\Request $request) {
    $server->outputImage($path, $request->all());
    exit;
})->where('path', '.*');