<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics= config("comics");

    return view('pages.index', $comics);
})->name('pages.index');
