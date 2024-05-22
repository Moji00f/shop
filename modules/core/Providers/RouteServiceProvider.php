<?php


namespace Modules\core\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $modules = config('app.modules');
        foreach ($modules as $module) {
            $apiRoutes = base_path('modules/' . $module . '/routes/api.php');
            $webRoutes = base_path('modules/'.$module.'/routes/web.php');
            $namespace = 'Modules\\'.$module.'\\Http\\Controllers';
            if(file_exists($apiRoutes)){
                Route::middleware('api')->namespace($namespace)->prefix('api')->group($apiRoutes);
            }
            if(file_exists($webRoutes)){
                Route::middleware('web')->namespace($namespace)->group($webRoutes);
            }
       }
    }
}
