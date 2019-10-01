<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicPost\Controllers'], function () {
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::resource('posts', 'Admin\\PostController');

    });

    Route::resource('posts', 'PostController');
});
