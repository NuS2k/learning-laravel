<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RespositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            App\Respositories\BaseRepositoryInterface::class,
            App\Respositories\BaseRepository::class,
        );
    }

    public function boot()
    {
        //
    }
}
