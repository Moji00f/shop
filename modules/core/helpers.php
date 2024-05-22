<?php

function modulesList(){
    $path = base_path('modules');
    $modules = scandir($path);
    $modules = array_diff($modules, array('.', '..'));
    config()->set('app.modules', $modules);
    return $modules;
}
function addModulesProviders(){
    $modules = modulesList();
    foreach ($modules as $module){
        $providerDir = base_path('modules/'.$module.'/Providers');
        if (is_dir($providerDir)){
            $files = scandir($providerDir);
            $files = $modules = array_diff($files, array('.', '..'));
            foreach ($files as $file){
                $class = '\\Modules\\'.$module.'\\Providers\\'.str_replace('.php', '', $file);
                if (class_exists($class) && $class != '\Modules\core\Providers\ModuleProvider'){
                    \Illuminate\Support\Facades\App::register($class);
                }
            }
        }
    }
}


