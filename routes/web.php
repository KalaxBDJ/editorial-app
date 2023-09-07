<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Controller for main page routes
Route::controller(PageController::class)->group(function (){
        Route::get('/', 'home')->name('home');
});
