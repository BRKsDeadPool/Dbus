<?php

namespace BRKsDeadPool\DBus;

use BRKsDeadPool\DBus\Contracts\DBus;
use Illuminate\Support\ServiceProvider;
use Michaels\Manager\Manager;

class DBusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/dbus.php' => config_path('dbus.php')
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(DBus::class, function($app) {
           return new Manager(config('dbus'));
        });
    }
}