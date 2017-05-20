<?php

namespace BRKsDeadPool\Dbus\Facades;

use Illuminate\Support\Facades\Facade;
use \BRKsDeadPool\Dbus\Contracts\Dbus as DbusContract;

class Dbus extends Facade
{
    public static function getFacadeAccessor() {
        return DbusContract::class;
    }
}