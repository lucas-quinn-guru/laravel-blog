<?php

Route::group(['namespace' => 'LucasQuinnGuru\LaravelBlog\Controllers'], function()
{
    Route::get('/blog', ['uses' => 'PostController@index']);
});