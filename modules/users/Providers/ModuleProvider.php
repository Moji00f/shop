<?php

namespace Modules\users\Providers;

use Illuminate\Support\ServiceProvider;
class ModuleProvider extends ServiceProvider
{
    public function register() :void
    {
       $this->loadMigrationsFrom(base_path('modules/users/database/migrations'));
    }

    public function boot() :void
    {

    }
}
