<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\RepositoryServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            [App\Providers\RespositoryServiceProvider::class]
        );
    }

    public function boot()
    {
        //
    }
}
