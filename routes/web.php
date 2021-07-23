<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resources(['posts' => PostsController::class]);

Route::get('/dashboard', [DashboardController::class, 'index']);
//Route::get('/hello', function () {
//    return 'Hello World';
//});
//
//Route::get('/about', function() {
//    return view('pages.about');
//});
//
////Dynamic Routes
//Route::get('/users/{id}', function($id) {
//    return 'This is users '.$id;
//});

Auth::routes();

//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
