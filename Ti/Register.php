<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/16
 * Time: 16:21
 */

namespace Ti;

class Register
{
    protected static $objects;

    static public function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }

    static public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    static public function get($alias)
    {
        return self::$objects[$alias];
    }
}