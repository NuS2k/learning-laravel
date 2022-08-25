<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\BaseRepositoryInterface::class,
            \App\Repositories\BaseRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Admin\PermissionGroup\PermissionGroupRepositoryInterface::class,
            \App\Repositories\Admin\PermissionGroup\PermissionGroupRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Admin\Permission\PermissionRepositoryInterface::class,
            \App\Repositories\Admin\Permission\PermissionRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Admin\Customer\CustomerRepositoryInterface::class,
            \App\Repositories\Admin\Customer\CustomerRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Admin\User\UserRepositoryInterface::class,
            \App\Repositories\Admin\User\UserRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Admin\Role\RoleRepositoryInterface::class,
            \App\Repositories\Admin\Role\RoleRepository::class
        );
    }

    public function boot()
    {
        //
    }
}
