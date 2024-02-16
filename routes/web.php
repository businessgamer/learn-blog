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

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/all-free-courses', 'all-free-courses');
Route::view('/css-language-course', 'css-language-course');
Route::view('/free-c++-language-course', 'free-c++-language-course');
Route::view('/free-content-writing-course', 'free-content-writing-course');
Route::view('/free-filmscript-writing-course', 'free-filmscript-writing-course');
Route::view('/free-java-language-course', 'free-java-language-course');
Route::view('/free-local-seo-course', 'free-local-seo-course');
Route::view('/free-lyrics-writing-course', 'free-lyrics-writing-course');
Route::view('/free-off-page-seo-course', 'free-off-page-seo-course');
Route::view('/free-on-page-seo-course', 'free-on-page-seo-course');
Route::view('/free-python-language-course', 'free-python-language-course');
Route::view('/free-technical-seo-course', 'free-technical-seo-course');
Route::view('/html-language-course', 'html-language-course');
Route::view('/php-language-course', 'php-language-course');
Route::view('/privacy-policy', 'privacy-policy-for-educated');
Route::view('/science-for-10th-class', 'science-for-10th-class');
Route::view('/science-for-12th-class', 'science-for-12th-class');
Route::view('/wordpress-website-designing-course', 'wordpress-website-designing-course');


Route::get('/{category}', [IndexController::class, 'categoryBlogs'])->name('blogs.category');

