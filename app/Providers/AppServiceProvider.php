<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(
            [App\Providers\RespositoryServiceProvider::class]
        );
    }

    public function boot()
    {
        //
    }
}
