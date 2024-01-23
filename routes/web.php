<?php

use App\Http\Controllers\HomeController;
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
// Route::get('/{tag}', [HomeController::class, $slug]);
Route::get('/hello', [HomeController::class, 'hello']);
// Route::get('/hello', function () {
//     return view('hello');
// });


Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    if (file_exists($path)) {
        $post = file_get_contents($path);
        return view('post', ['post' => $post]);
    } else {
        // ddd('file does not exist');
        return redirect('/');
    }
})->where('post', '[A-z_\-]+');
