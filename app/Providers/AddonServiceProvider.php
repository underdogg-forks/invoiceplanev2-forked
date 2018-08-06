<?php

namespace IP\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use IP\Modules\Addons\Models\Addon;

class AddonServiceProvider extends ServiceProvider
{
    public function boot(Request $request)
    {
        if ($request->segment(1) == 'setup' || app()->runningInConsole() || $this->app->environment() == 'testing') {
            // Abort if the app is currently curring in the CLI, is running tests or the setup
            return;
        }

        config(['fi.menus.navigation' => []]);
        config(['fi.menus.system' => []]);
        config(['fi.menus.reports' => []]);

        // Get the enabled addons.
        $addons = Addon::where('enabled', 1)->orderBy('name')->get();

        // For each enabled addon, load the appropriate things.
        foreach ($addons as $addon) {
            if (isset($addon->navigation_menu) and $addon->navigation_menu) {
                config(['fi.menus.navigation.' . $addon->id => $addon->navigation_menu]);
            }

            if (isset($addon->navigation_reports) and $addon->navigation_reports) {
                config(['fi.menus.reports.' . $addon->id => $addon->navigation_reports]);
            }

            if (isset($addon->system_menu) and $addon->system_menu) {
                config(['fi.menus.system.' . $addon->id => $addon->system_menu]);
            }

            // Scan addon directories for routes, views and language files.
            $routesPath = addon_path($addon->path . '/routes.php');
            $viewsPath = addon_path($addon->path . '/Views');
            $langPath = addon_path($addon->path . '/Lang');

            if (file_exists($routesPath)) {
                require $routesPath;
            }

            if (file_exists($viewsPath)) {
                $this->app->view->addLocation($viewsPath);
            }

            if (file_exists($langPath)) {
                $this->loadTranslationsFrom($langPath, 'addon');

                $this->loadTranslationsFrom($langPath, $addon->path);
            }

            $providerPath = addon_path($addon->path . '/AddonServiceProvider.php');

            if (file_exists($providerPath)) {
                $this->app->register('Addons\\' . $addon->path . '\AddonServiceProvider');
            }
        }
    }

    public function register()
    {

    }
}
