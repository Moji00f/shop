<?php

namespace Modules\categories\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function register() :void
    {
        $this->loadMigrationsFrom("modules/categories/database/migrations");
    }

    public function boot() :void
    {
//        dd('category module provider boot');
    }
}
