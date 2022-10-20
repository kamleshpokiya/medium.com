<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\admin\ArticleController;
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

//admin routes
Route::group(['prefix' => 'admin'], function(){
    Route::resource('article', ArticleController::class);
});
    // Route::resource('article', ArticleController::class);
// Route::resource('article', 'Admin\ArticleController');
// Route::get('/', function () {
//     return view('admin/articles/create');
// });
// Route::get('/', 'Home\HomeController@index');

// admin/test
// Route::group(
//     array('prefix' => 'admin'), 
//     function() {
//         Route::resource('article', ArticleController::class);
//     }
// );

// Route::namespace('App\Http\Controllers\admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/article', ArticleController::class);
//     // Route::resource('/users', UsersController::class);
// });

