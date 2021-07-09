<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::get('/posts', [PostController::class, 'create'])
->middleware(['auth'])
->name('posts');

Route::post('/posts', [PostController::class, 'store']);

Route::get('/dashboard', function () { return view('dashboard'); })
->middleware(['auth'])
->name('dashboard');

require __DIR__.'./auth.php';

/* TODO
 * 30 posts
 * 9 posts per page
 * 3 posts per row
 * replace user name by first_name and last_name
 * add user_id to posts table
 * create link to posts.user_id with user.id
 * CRUD routes and views + route post/{id}
 * bonus: popups
 * bonus: CRUD modals
*/