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

Route::get('/', function () {
    return view('layouts.pages.index');
});

Route::get('/shareholders', function () {
    return view('layouts.pages.shareholders');
});

Route::get('/loans', function () {
    return view('layouts.pages.loans');
});

Route::get('/deposits', function () {
    return view('layouts.pages.deposits');
});

Route::get('/contacts', function () {
    return view('layouts.pages.contacts');
});

Route::get('/docs', function () {
    return view('layouts.pages.docs');
});

Route::get('/news/{id}', function ($id) {
    return view('layouts.pages.news.'.$id);
})->name('news');
