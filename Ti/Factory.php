<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/16
 * Time: 11:33
 */
namespace Ti;

class Factory
{
    public static function createDatabase()
    {
        $db = Database::getInstance();
        Register::set("db1",$db);
        return $db;

    }
}