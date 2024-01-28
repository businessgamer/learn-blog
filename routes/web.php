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
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/single-courses', function () {
    return view('single-courses');
});
Route::get('/free-off-page-seo-course', function () {
    return view('free-off-page-seo-course');
});
Route::get('/free-on-page-seo-course', function () {
    return view('free-on-page-seo-course');
});
Route::get('/free-technical-seo-course', function () {
    return view('free-technical-seo-course');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
