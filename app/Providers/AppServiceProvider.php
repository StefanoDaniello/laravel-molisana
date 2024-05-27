<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $mydata=[
            [
                "key1"=> "value1",
                "key2"=> "value2",
            ],
            [
                "key1"=> "value1,2",
                "key2"=> "value2,2",
            ]
        ];
        view()->share(compact('mydata'));
    }
}
