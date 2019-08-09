<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\LaravelPost\Controllers'], function () {
    //Route::get('/blog', ['uses' => 'PostController@index']);

    Route::resource('posts', 'PostController');
});
