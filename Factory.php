<?php
namespace SlaxWeb\Database;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Factory
{
    public static function Database(&$CI)
    {
        $capsule = new Capsule();

        $capsule->addConnection(
            array( 
                "driver"    =>  $CI->conf->item("db_driver"),
                "host"      =>  $CI->conf->item("db_host"),
                "database"  =>  $CI->conf->item("db_name"),
                "username"  =>  $CI->conf->item("db_user"),
                "password"  =>  $CI->conf->item("db_pass"),
                "charset"   =>  $CI->conf->item("db_charset"),
                "collation" =>  $CI->conf->item("db_collation"),
                "prefix"    =>  $CI->conf->item("db_prefix")
            )
        );

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        return $capsule;
    }
}
