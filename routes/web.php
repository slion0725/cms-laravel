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

// Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'index')->name('index');
Route::view('/dashboard', 'dashboard')->name('dashboard.index');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(['auth', 'role:admin'])->group(function () {
    // admin
    Route::get('accounts/datatables', 'AccountsController@datatables')->name('accounts.datatables');
    Route::resource('accounts', 'AccountsController');

    Route::get('activity-log/datatables', 'ActivityLogsController@datatables');
    Route::resource('activity-log', 'ActivityLogsController')->only(['index', 'show']);

    Route::get('roles/datatables', 'RolesController@datatables')->name('roles.datatables');
    Route::resource('roles', 'RolesController');

    Route::get('permissions/datatables', 'PermissionsController@datatables')->name('permissions.datatables');
    Route::resource('permissions', 'PermissionsController');

    Route::get('assign-roles/datatables', 'AssignRolesController@datatables')->name('assign-roles.datatables');
    Route::resource('assign-roles', 'AssignRolesController');
});

Route::middleware(['auth'])->group(function () {
    Route::put('profile/{id}', 'ProfileController@update')->name('profile.update');

    Route::get('products/datatables', 'ProductsController@datatables')->name('products.datatables');
    Route::resource('products', 'ProductsController');
});

// league/glide + league/glide-laravel
Route::get('i/{path}', function (League\Glide\Server $server, $path, Illuminate\Http\Request $request) {
    $server->outputImage($path, $request->all());
    exit;
})->where('path', '.*');