<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect('/id');
});
Route::prefix('{locale}')
    ->where(['locale' => 'en|id'])
    ->group(function () {
        Route::get('/', fn () => view('pages.home'))->name('home');
    });
