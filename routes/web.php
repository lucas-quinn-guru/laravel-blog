<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\LaravelBlog\Controllers'], function () {
    //Route::get('/blog', ['uses' => 'PostController@index']);

    Route::resource('posts', 'PostController');
});
