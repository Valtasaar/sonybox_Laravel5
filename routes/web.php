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

Auth::routes();


/* Test routes */
Route::group(['prefix' => 'static'], function () {
    Route::get('/', function () {
        return view('pages.static.main');
    });

    Route::get('/city', function () {
        return view('pages.static.city');
    });

    Route::get('/service', function () {
        return view('pages.static.service');
    });

    Route::get('/comments', function () {
        return view('pages.static.comments');
    });

    Route::get('/add-company', function () {
        return view('pages.static.add-company');
    });

    Route::get('/feedback', function () {
        return view('pages.static.feedback');
    });

    Route::get('/user-agreement', function () {
        return view('pages.static.user-agreement');
    });

    Route::get('/questions', function () {
        return view('pages.static.questions');
    });

    Route::get('/add-question', function () {
        return view('pages.static.add-question');
    });

    Route::get('/articles', function () {
        return view('pages.static.articles');
    });

    Route::get('/article', function () {
        return view('pages.static.article');
    });

    Route::get('/news', function () {
        return view('pages.static.news');
    });

    Route::get('/news-item', function () {
        return view('pages.static.news-item');
    });

    Route::get('/about', function () {
        return view('pages.static.about');
    });

    Route::get('/contacts', function () {
        return view('pages.static.contacts');
    });
});
