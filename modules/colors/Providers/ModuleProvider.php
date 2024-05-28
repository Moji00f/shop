<?php

namespace Modules\colors\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function register() :void
    {
        $this->loadMigrationsFrom("modules/colors/database/migrations");
    }

    public function boot() :void
    {
//        dd('category module provider boot');
    }
}
