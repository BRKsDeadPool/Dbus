<?php

namespace BRKsDeadPool\Dbus;

use BRKsDeadPool\Dbus\Contracts\Dbus;
use Illuminate\Support\ServiceProvider;
use Michaels\Manager\Manager;

class DbusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/dbus.php' => config_path('dbus.php')
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(Dbus::class, function($app) {
           return new Manager(config('dbus'));
        });
    }
}