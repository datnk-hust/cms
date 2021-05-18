<?php

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

Route::get('/', function () {
    return view('login');
});
Route::post('/login',"UserController@PostLogin")->name('user.post.login');
// Route::group(['user' => 'admin'], function () {
//     Route::get('users', function ()    {
//         // Matches The "/admin/users" URL
//     });
// });
