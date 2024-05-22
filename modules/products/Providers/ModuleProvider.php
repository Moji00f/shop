<?php

namespace Modules\products\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function register() :void
    {
        $this->loadMigrationsFrom("modules/products/database/migrations");
    }

    public function boot() :void
    {

    }
}
