<?php

namespace Modules\core\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function register() :void
    {
        require_once base_path('modules/core/helpers.php');
        addModulesProviders();
    }

    public function booted(Closure $callback) :void
    {

    }
}
