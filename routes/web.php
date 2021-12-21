<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics= config("comics");
    

    return view('pages.index', compact("comics") );
})->name('pages.index');




Route::get("/comic-details/{id?}", function($id) {
    $data= config("comics");
    
    if (is_numeric($id) && $id >= 0 && $id < count($data)) {
        $comic= $data[$id];
        

        return view('pages.item_details', [
            "item"=>$comic
        ]);
    }else {
        abort('404');
    }
    

})->name('pages.item_details');










