<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics= config("comics");
    

    return view('pages.index', compact("comics") );
})->name('pages.index');




Route::get('/comic-details/{id?}', function ($id) {
    $comics= config("comics");
    $comic= $comics[$id];

    return view('pages.item_details', [
        "item"=>$comic
    ]);
})->name('pages.item_details');










