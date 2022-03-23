<?php

Use App\http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){

    Route::get('/',[AdminController::class,'index']);

    Route::get('/list_users',[AdminController::class,'list_users'])->name('list_users');
    Route::get('/list_series',[AdminController::class,'list_series'])->name('list_series');


 


});