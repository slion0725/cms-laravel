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

// Route::get('/', function () {
//     return view('welcome');
// })->name('index');

Route::view('/', 'index')->name('index');
Route::view('/dashboard', 'dashboard')->name('dashboard.index');

Auth::routes();

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('accounts/datatables', 'AccountsController@datatables')->name('accounts.datatables');
    Route::resource('accounts', 'AccountsController');
    // Route::get('accounts/datatables', 'AccountsController@datatables')->name('accounts.datatables')->middleware('role:admin');
    // Route::resource('accounts', 'AccountsController')->middleware('role:admin');
});




// league/glide + league/glide-laravel
Route::get('i/{path}', function (League\Glide\Server $server, $path, Illuminate\Http\Request $request) {
    $server->outputImage($path, $request->all());
    exit;
})->where('path', '.*');