<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// league/glide + league/glide-laravel
use League\Glide\ServerFactory;
use League\Glide\Responses\LaravelResponseFactory;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // for Https
        URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // prettus/l5-repository
        $this->app->register(RepositoryServiceProvider::class);

        // league/glide + league/glide-laravel
        $this->app->singleton('League\Glide\Server', function ($app) {
            $filesystem = $app->make('Illuminate\Contracts\Filesystem\Filesystem');
            return ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(),
                'cache' => $filesystem->getDriver(),
                'cache_path_prefix' => '.cache',
                'base_url' => 'i',
            ]);
        });
    }
}
