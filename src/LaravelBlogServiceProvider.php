<?php

namespace LucasQuinnGuru\LaravelBlog;

use Illuminate\Support\ServiceProvider;

class LaravelBlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel_blog.php',
            'laravel_blog'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . '/../routes/web.php' );
        $this->loadMigrationsFrom(__DIR__.'/../database//migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-blog');

        $this->publishes([
            __DIR__ . '/../config/laravel_blog.php' => config_path('laravel_blog.php'),
        ], 'laravel-blog-config');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/lucas-quinn-guru/blog'),
        ], 'assets');
    }
}
