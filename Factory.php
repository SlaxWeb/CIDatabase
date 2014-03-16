<?php
namespace SlaxWeb\Database;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Factory
{
    public static function Database(array $conf)
    {
        $capsule = new Capsule();

        $capsule->addConnection(
            array( 
                "driver"    =>  $conf["db_driver"],
                "host"      =>  $conf["db_host"],
                "database"  =>  $conf["db_name"],
                "username"  =>  $conf["db_user"],
                "password"  =>  $conf["db_pass"],
                "charset"   =>  $conf["db_charset"],
                "collation" =>  $conf["db_collation"],
                "prefix"    =>  $conf["db_prefix"]
            )
        );

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        return $capsule;
    }
}
