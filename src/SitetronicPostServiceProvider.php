<?php

namespace LucasQuinnGuru\SitetronicPost;

use Illuminate\Support\ServiceProvider;

class SitetronicPostServiceProvider extends ServiceProvider
{

    protected $commands = [
        'LucasQuinnGuru\SitetronicPost\Commands\SeedRolesAndPermissionsCommand'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sitetronic-post.php',
            'sitetronic-post'
        );

        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        dd( 'hello' );
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database//migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitetronic-post');

        $this->publishes([
            __DIR__ . '/../config/sitetronic-post.php' => config_path('sitetronic-post.php'),
        ], 'sitetronic-post-config');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/lucas-quinn-guru/post'),
        ], 'assets');
    }
}
