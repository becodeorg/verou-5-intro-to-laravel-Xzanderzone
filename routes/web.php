<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/hello', [HomeController::class, 'hello'])->name('hello');
Route::get('/post', [HomeController::class, 'post']);

Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    if (file_exists($path)) {
        $post = file_get_contents($path);
        return view('post', ['post' => $post]);
    } else {
        return redirect('/');
    }
})->where('post', '[A-z_\-]+');


Route::delete('/register/{id}', [RegisterController::class, 'destroy'])->name('destroyUser');
Route::get('/register/{id}', [RegisterController::class, 'edit'])->name('editUser');//wip to handle errors / edit inputs/post info
Route::get('/register', [RegisterController::class, 'index'])->name('showRegister');
Route::post('/register', [RegisterController::class, 'create'])->name('handleRegister');

Route::get('/users', [UserController::class, 'index'])->name('showUsers');
Route::get('/users/{user}', [UserController::class, 'show'])->name('showUser');