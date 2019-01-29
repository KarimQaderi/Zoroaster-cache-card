<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Cache;


    Route::get('/flush' , function(){
        Cache::flush();
        return back();
    })->name('ZoroasterCacheCard.flush');
    