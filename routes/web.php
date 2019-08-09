<?php

Route::group(['namespace' => 'LucasQuinnGuru\LaravelBlog\Controllers'], function () {
    //Route::get('/blog', ['uses' => 'PostController@index']);

    Route::resource('blog', 'PostController');
});
