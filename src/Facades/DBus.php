<?php

namespace BRKsDeadPool\DBus\Facades;

use Illuminate\Support\Facades\Facade;
use \BRKsDeadPool\DBus\Contracts\DBus as DBusContract;

class DBus extends Facade
{
    public static function getFacadeAccessor() {
        return DBusContract::class;
    }
}