<?php

use App\Http\Controllers\IndexController;
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/blogs', [IndexController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [IndexController::class, 'blogDetail'])->name('blog.slug');
Route::get('/tag/{tag}', [IndexController::class, 'tagBlogs'])->name('blog.tag');
Route::get('/author/{id}', [IndexController::class, 'authorPage'])->name('author');

Route::get('/courses', [IndexController::class, 'courses']);
// Route::get('/course/{slug}', function () {
//     return view('course-single');
// })->name('course.slug');

Route::get('/{category}', [IndexController::class, 'categoryBlogs'])->name('blogs.category');
