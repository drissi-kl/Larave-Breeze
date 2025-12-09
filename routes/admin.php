<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->group(function(){

    Route::middleware("authAdmin")->group(function(){
        Route::view("/index",'admin.index')->name("index");
        
       
    });    

    require __DIR__."/auth_admin.php";
});







