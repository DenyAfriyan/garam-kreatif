<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect('/id');
});
Route::prefix('{locale}')
    ->where(['locale' => 'en|id'])
    ->group(function () {
        Route::get('/', fn () => view('pages.home'))->name('home');
        Route::get('/about', fn () => view('pages.about'))->name('about');
        Route::get('/work', fn () => view('pages.work'))->name('work');
        Route::get('/othman', fn () => view('pages.othman'))->name('othman');

    });
