<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('GuzzleHttp\Client', function(){
        //     return new Client([
        //         'base_uri' => 'https://jsonplaceholder.typicode.com',
        //     ]);
        // });
        $base_uri = env('API_ENDPOINT');
        $headers = ['token' => env('API_TOKEN')];
        $this->app->singleton('GuzzleHttp\Client', function(){
            return new Client([$base_uri, $headers]);

        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
