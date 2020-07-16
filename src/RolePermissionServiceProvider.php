<?php

namespace Sequally\Permission;

use Illuminate\Support\ServiceProvider;

/**
 * @package Sequally\Permission
 */
class RolePermissionServiceProvider extends ServiceProvider
{
    /**
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/src/Database/Migrations');
    }

    /**
     */
    public function register(): void
    {
    }
}