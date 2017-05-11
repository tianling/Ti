<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/11
 * Time: 17:56
 */

namespace Ti;

class Loader
{
    static function autoload($class)
    {
        $target = BASEDIR.'/'.str_replace('\\','/',$class);
    }
}